<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/admin/framework/controllerAdmin.php';
	
	class HomeController extends ControllerAdmin{
		public function getIndex(){
			$this->render('index');
		}
	}	
 //index.php?ctr=rents&act=getIndex
?>	