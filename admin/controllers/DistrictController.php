<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/admin/framework/controllerAdmin.php';
	
	class DistrictController extends ControllerAdmin{
		public function getIndex(){
			$this->render('indexDistrict');
		}
		public function getEdit(){
			$this->render('editDistrict');
		}
		public function getAdd(){
			$this->render('addDistrict');
		}
	}	
 //index.php?ctr=rents&act=getIndex
?>