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
			$nameFind="";
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
			
			$this->render('indexNews',$data);
		}
		public function getEdit(){
			$idRent = $_POST['idRent'];

			$rent_name = $_POST['rent_name'];
			$describe_rent = $_POST['describe_rent'];
			$price = $_POST['price'];
			$square = $_POST['square'];
			$province_id = $_POST['province_id'];
			$district_id = $_POST['district_id'];
			$ward_id = $_POST['ward_id'];
			$type_id = $_POST['type_id'];

			$args = array("userId" => $idRent,
					"rent_name" => $rent_name,
					"describe_rent" => $describe_rent,
					"price" => $price,"square" => $square,
					"province_id" => $province_id,
					"district_id" => $district_id,
					"ward_id" => $ward_id,
					"type_id" => $type_id);

			$rentModel = new Rent();
			$rentId = $rentModel -> editRent($args);

			$type = new Type();
			$data['type'] = $type->getArrayType();
			$this->render('addNews',$data);
		}
		public function editPage(){
			$type = new Type();
			$data['type'] = $type->getArrayType();
			$this->render('addNews',$data);
		}
		public function getAdd(){
			$rent_name = $_POST['rent_name'];
			$describe_rent = $_POST['describe_rent'];
			$price = $_POST['price'];
			$square = $_POST['square'];
			$province_id = $_POST['province_id'];
			$district_id = $_POST['district_id'];
			$ward_id = $_POST['ward_id'];
			$type_id = $_POST['type_id'];

			$args = array(
					"rent_name" => $rent_name,
					"describe_rent" => $describe_rent,
					"price" => $price,"square" => $square,
					"province_id" => $province_id,
					"district_id" => $district_id,
					"ward_id" => $ward_id,
					"type_id" => $type_id);

			$rentModel = new Rent();
			$rentId = $rentModel -> addRent($args);

			$type = new Type();
			$data['type'] = $type->getArrayType();
			$this->render('addNews',$data);
		}
		public function addPage(){
			$type = new Type();
			$data['type'] = $type->getArrayType();
			$this->render('addNews',$data);
		}
	}	
 //index.php?ctr=rents&act=getIndex
?>	