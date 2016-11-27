<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/admin/framework/controllerAdmin.php';
	require_once $_SERVER['DOCUMENT_ROOT'].'/models/Address.php';
	require_once $_SERVER['DOCUMENT_ROOT'].'/libs/CVarDumper.php';
	class ProvinceController extends ControllerAdmin{
		public function getIndex(){
			$address= new Address();
			$data['province']=$address->getArrayProvince();
			$this->render('indexProvince',$data);
		}
		public function getEdit(){
			if (!empty($_GET['idProvince']))
			{
				$idProvince=$_GET['idProvince'];
				$address= new Address();
				$data=$address->getProvinceById($idProvince);
				$this->render('editProvince',$data);	
			}
		}
		public function getAdd(){
			$this->render('addProvince');
		}
	}	
 //index.php?ctr=rents&act=getIndex
?>