<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/admin/framework/ControllerAdmin.php';
	require_once $_SERVER['DOCUMENT_ROOT'].'/libs/CVarDumper.php';
	require_once $_SERVER['DOCUMENT_ROOT'].'/models/User.php';
	class LoginController extends ControllerAdmin{
		public function getIndex(){
			$this->render('login');
		}
		public function getLogin(){
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
				}else if ($check['auth']==1){
					$_SESSION['user_infor_ad'] = $check;				
					$this->redirect('ctr=home&act=getIndex');
				}else{
					$_SESSION['warning'] = 1;
					$this->redirect('ctr=auth&act=getLogin');
				}
			}
		}
		public function getOut(){
			unset($_SESSION['user_infor_ad']);
			$this->redirect('ctr=home&act=getIndex');
		}
	}
?>	