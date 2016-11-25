<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/admin/framework/controllerAdmin.php';
	
	class UserController extends ControllerAdmin{
		public function getIndex(){
			$this->render('indexUser');
		}
		public function getDetail(){
			$this->render('detailUser');
		}
		public function getEdit(){
			$this->render('editUser');
		}
		public function getAdd(){
			$this->render('addUser');
		}
	}	
 //index.php?ctr=rents&act=getIndex
?>