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
			$idUser=$_GET['idUser'];
			$pass=$_POST['password'];
			$name_display=trim($_POST['fullname']);
			$phone=trim($_POST['phone']);
			$email=trim($_POST['email']);
			$auth=$_POST['auth'];
			$image_url='12';
			$gender='f';
			$province_id='0';
			$district_id='1';
			$ward_id='0';
			$address_detail='0';
			$arg = array('password' => $pass,
						'phone' =>$phone,
						'name_display' => $name_display,
						'email' => $email,
						'image_url' => $image_url,
						'gender' => $gender,
						'auth' => $auth,
						'province_id' => $province_id,
						'district_id' => $district_id,
						'ward_id' => $ward_id,
						'address_detail' => $address_detail,
						'user_id' => $idUser);
			$user=new User();
			$check=$user -> editUser($arg);
			$converted_check=$check ? 'true' : 'false';
			$this->redirect('ctr=user&act=getIndex&load=edit&check='.$converted_check);
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
			$converted_check=$check ? 'true' : 'false';
			$this->redirect('ctr=user&act=getIndex&load=add&check='.$converted_check);

		}
		public function delUser(){
			$this->redirect('ctr=user&act=getIndex&load=del');
		}
	}	
 //index.php?ctr=rents&act=getIndex
?>