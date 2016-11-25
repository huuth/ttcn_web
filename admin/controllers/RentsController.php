<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/admin/framework/controllerAdmin.php';
	
	class RentsController extends ControllerAdmin{
		public function getIndex(){
			$this->render('indexNews');
		}
		public function getEdit(){
			$this->render('editNews');
		}
		public function getAdd(){
			$this->render('addNews');
		}
	}	
 //index.php?ctr=rents&act=getIndex
?>	