<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/admin/framework/controllerAdmin.php';
	require_once $_SERVER['DOCUMENT_ROOT'].'/models/User.php';
	require_once $_SERVER['DOCUMENT_ROOT'].'/libs/CVarDumper.php';
	class UserController extends ControllerAdmin{
		public function getIndex(){
			$user=new User();
			$data['user']=$user->getArrayUser();
			$this->render('indexUser',$data);
		}
		public function getDetail(){
			if (!empty($_GET['idUser'])){
				$user=new User();
				$data=$user->getUserById($_GET['idUser']);
				$this->render('detailUser',$data);
			}
		}
		public function getEdit(){
			if (!empty($_GET['idUser'])&&empty($_GET['load'])){
				$user=new User();
				$data=$user->getUserById($_GET['idUser']);
				$this->render('editUser',$data);
			}
		}
		public function editUser(){
			$idUser=0;
			$userName=trim($_POST['username']);
			$pass=$_POST['password'];
			$name_display=trim($_POST['fullname']);
			$phone=trim($_POST['phone']);
			$email=trim($_POST['email']);
			$auth=$_POST['auth'];
			$arg = array('username' => $userName,
						'password' => $pass,
						'name_display' => $name_display,
						'email' => $email,
						'auth' => $auth);
			$user=new User();
			$check=$user -> editUser();
			$this->redirect('ctr=user&act=getIndex&load=edit&check=$check');
		}
		public function getAdd(){
			$this->render('addUser');
		}
		public function addUser(){
			$idUser=0;
			$userName=trim($_POST['username']);
			$pass=$_POST['password'];
			$name_display=trim($_POST['fullname']);
			$phone=trim($_POST['phone']);
			$email=trim($_POST['email']);
			$auth=0;
			$arg = array('username' => $userName,
						'password' => $pass,
						'name_display' => $name_display,
						'email' => $email,
						'auth' => $auth);
			$user=new User();
			$check=$user->addUser($arg);
			dump($arg);
			$this->redirect('ctr=user&act=getIndex&load=add&check=$check');

		}
		public function delUser(){
			$this->redirect('ctr=user&act=getIndex&load=del');
		}
	}	
 //index.php?ctr=rents&act=getIndex
?>