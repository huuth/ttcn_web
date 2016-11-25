<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/admin/framework/controllerAdmin.php';
	
	class RentsController extends ControllerAdmin{
		public function getIndex(){
			$this->render('indexNews');
		}
		public function getTable(){
			
		}
	}	
 //index.php?ctr=rents&act=getIndex
?>	