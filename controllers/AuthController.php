<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/framework/base/Controller.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/User.php';
/**
*  
*/
class AuthController extends Controller{
	public function getLogin(){
		$this->render('auth/login');
	}
	public function postLogin(){
		$user = new User();
		if(isset($_POST['submit'])){
			$email = $_POST['email'];
			$password = $_POST['password'];
			$check = $user->getUser($email,$password);
			if($check == 0){
				$_SESSION['warning'] = 1;
				$this->redirect('ctr=auth&act=getLogin');
			}else if($check == -1){
				$this->redirect('ctr=error&act=error404');
			}else{
				$_SESSION['user_infor'] = $check;				
				$this->redirect('ctr=home&act=getIndex');
			}
		}
	}
	public function getRegister(){
		$this->render('auth/register');
	}	
	public function postRegister(){
		
		$user = new User();
		$args = [];
		$count = 0;
		if(isset($_POST['submit'])){
			// var_dump($_POST);
			if(!empty($_POST['name'])){
				$args['username'] = $_POST['name'];
				$args['name_display'] = $args['username'];
				$count++;
			}
			if(!empty($_POST['password'])){
				$args['password'] = $_POST['password'];
				$count++;
			}
			if(!empty($_POST['email'])){
				$args['email'] = $_POST['email'];
				$count++;
			}
			if($count == 3){
				$args['auth'] = 0;
				$check = $user->getUser($args['email']);
				if( $check == -1 ){//error 404	
					$this->redirect('ctr=error&act=error404');
				}else if($check == 0){ //email don't exists yet
					if(!$user->addUser($args)){
						$this->redirect('ctr=error&act=error404');
					}
					$_SESSION['success'] = 1;
					$this->redirect('ctr=auth&act=getLogin');
										
				}else{//email already existed			
					$_SESSION['existed_mail'] = 1;
					$this->redirect('ctr=auth&act=getRegister');
				}
			}else{
				$this->redirect('ctr=error&act=error404');
			}
		}else{
			$this->redirect('ctr=auth&act=getRegister');
		}	
	}
	public function logout(){
		unset($_SESSION['user_infor']);
		$this->redirect('ctr=home&act=getIndex');
	}
}