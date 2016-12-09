<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/admin/framework/controllerAdmin.php';
	require_once $_SERVER['DOCUMENT_ROOT'].'/models/Rent.php';
	require_once $_SERVER['DOCUMENT_ROOT'].'/models/Type.php';
	require_once $_SERVER['DOCUMENT_ROOT'].'/libs/CVarDumper.php';
	class RentsController extends ControllerAdmin{
		public function getIndex(){
			$rent= new Rent();
			
			$currentPage=($_GET['currentPage']-1)*10;
			
			$numberPage=10;
			$nameFind=$_GET['keyWord'];
			if(!empty($_POST['txtSearch'])){
				$nameFind=$_POST['txtSearch'];
			}
			
			$arg = array(
				'limit' => array(
					'currentPage' => $currentPage, 
					'numberPage' => $numberPage
				),
				'rent_name'=>$nameFind
				);
			
			//dump($arg);
			$data['totalRows']=$rent->getTotalRent($arg);
			$data['news']=$rent->getArrayRent($arg);
			$data['keyWord']=$nameFind;

			
			$this->render('indexNews',$data);
		}
		public function browsingPage(){
			$rent= new Rent();
			$data = $rent->getRentById($_GET['idRent']);
			dump($data);
			$this->render('browsingNews',$data);
		}
	}	
 //index.php?ctr=rents&act=getIndex
?>	