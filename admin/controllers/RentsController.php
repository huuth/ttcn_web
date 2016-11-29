<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/admin/framework/controllerAdmin.php';
	require_once $_SERVER['DOCUMENT_ROOT'].'/models/Rent.php';
	require_once $_SERVER['DOCUMENT_ROOT'].'/libs/CVarDumper.php';
	class RentsController extends ControllerAdmin{
		public function getIndex(){
			$rent= new Rent();
			$currentPage=($_GET['currentPage']-1)*10;
			$nameFind="";
			$numberPage=10;
			if(!empty($_POST['txtSearch'])){
				$nameFind=$_POST['txtSearch'];
				$numberPage=20;
			}
			
			$arg = array(
				"limit" => array(
					'currentPage' => $currentPage, 
					'numberPage' => $numberPage
				),
				"rent_name"=>$nameFind

				);

			
			$data["totalRows"]=$rent->getTotalRent($arg);
			$data["news"]=$rent->getArrayRent($arg);
			
			$this->render('indexNews',$data);
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