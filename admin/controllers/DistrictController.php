<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/admin/framework/controllerAdmin.php';
	require_once $_SERVER['DOCUMENT_ROOT'].'/models/Address.php';
	require_once $_SERVER['DOCUMENT_ROOT'].'/libs/CVarDumper.php';
	class DistrictController extends ControllerAdmin{
		public function getIndex(){
			$address=new Address();
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