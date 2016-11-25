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
			if ($_GET['load']=='edit'){
				$user=new User();
				$check=
				$this->redirect('ctr=user&act=getIndex&load=edit');
			}
		}
		public function getAdd(){
			$this->render('addUser');
		}
	}	
 //index.php?ctr=rents&act=getIndex
?>