<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/admin/framework/controllerAdmin.php';
	
	class TypeController extends ControllerAdmin{
		public function getIndex(){
			$this->render('indexType');
		}
		public function getEdit(){
			$this->render('editType');
		}
		public function getAdd(){
			$this->render('addType');
		}
	}	
 //index.php?ctr=rents&act=getIndex
?>