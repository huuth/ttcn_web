<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/admin/framework/controllerAdmin.php';
	require_once $_SERVER['DOCUMENT_ROOT'].'/models/Rent.php';
	require_once $_SERVER['DOCUMENT_ROOT'].'/models/Type.php';
	require_once $_SERVER['DOCUMENT_ROOT'].'/models/User.php';
	require_once $_SERVER['DOCUMENT_ROOT'].'/models/Address.php';
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
		
			$rentModel = new Rent();
			$userModel = new User();
			$typeModel = new Type();
			$addressModel = new Address();
			if(isset($_GET['idRent'])){
				$data['rent'] = $rentModel -> getRentById($_GET['idRent']);
				if(empty($data['rent'])){
					$this->redirect('ctr=error&act=error404');
				}else{
					$data['user'] = $userModel -> getUserById($data['rent']['user_id']);
					$data['type'] = $typeModel -> getTypeById($data['rent']['type_id']);					
					$data['rent']['img'] = $rentModel->getArrayImgByRentId($data['rent']['rent_id']);
					$district = $addressModel->getDistrictById($data['rent']['district_id']);
					$province = $addressModel->getProvinceById($data['rent']['province_id']);
					$data['rent']['address_detail'] .= ', Quận '.  $district['name'] . ', ' . $province['name'];				
					$this->render('browsingNews',$data);	
				}
			}else{
				$this->redirect('ctr=error&act=error404');
			}
		}
		public function browsingNew(){
			$idRent=$_GET['idRent'];
			$status=0;
			if(isset($_POST['-1'])){
				$status=-1;
			}else if (isset($_POST['1'])){
				$status=1;
			}
			//dump($status);
			$arg= array('status' => $status, 'rent_id'=>$idRent);
			$rentModel= new Rent();
			$check=$rentModel->browsingNew();
			dump($check);
			$this->redirect('ctr=rents&act=getIndex&currentPage=1&keyWord=');

		}
	}	
 //index.php?ctr=rents&act=getIndex
?>	