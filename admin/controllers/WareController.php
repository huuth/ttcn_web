<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/admin/framework/controllerAdmin.php';
	
	class WareController extends ControllerAdmin{
		public function getIndex(){
			$this->render('indexWare');
		}
		public function getEdit(){
			$this->render('editWare');
		}
		public function getAdd(){
			$this->render('addWare');
		}
	}	
 //index.php?ctr=rents&act=getIndex
?>