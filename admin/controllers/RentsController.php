<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/admin/framework/controllerAdmin.php';
	require_once $_SERVER['DOCUMENT_ROOT'].'/models/Rent.php';
	require_once $_SERVER['DOCUMENT_ROOT'].'/models/Type.php';
	require_once $_SERVER['DOCUMENT_ROOT'].'/models/User.php';
	require_once $_SERVER['DOCUMENT_ROOT'].'/models/Address.php';
	require_once $_SERVER['DOCUMENT_ROOT'].'/libs/CVarDumper.php';
	class RentsController extends ControllerAdmin{
		public function getIndex(){
			if((isset($_GET['keyWord']))&&(isset($_GET['province_id']))&&(isset($_GET['district_id']))&&(isset($_GET['ward_id']))){
				$rent= new Rent();
				
				$currentPage=($_GET['currentPage']-1)*10;
				$numberPage=10;

				$nameFind=$_GET['keyWord'];
				$province_id=$_GET['province_id'];
				$district_id=$_GET['district_id'];
				$ward_id=$_GET['ward_id'];

				if(isset($_POST['keyWord'])){
					$nameFind=$_POST['keyWord'];
				}
				if(!empty($_POST['province_id'])){
					$province_id=$_POST['province_id'];
				}
				if(!empty($_POST['district_id'])){
					$district_id=$_POST['district_id'];
				}
				if(!empty($_POST['ward_id'])){
					$ward_id=$_POST['ward_id'];
				}
				
				$arg = array(
					'limit' => array(
						'currentPage' => $currentPage, 
						'numberPage' => $numberPage
					),
					'rent_name'=>$nameFind
					
					);

				if($province_id!=0){
					$arg['province_id'] = $province_id;
				}
				if($district_id!=0){
					$arg['district_id'] = $district_id;
				}
				if($ward_id!=0){
					$arg['ward_id'] = $ward_id;
				}

				
				// dump($arg);
				$data['totalRows']=$rent->getTotalRent($arg);
				$data['news']=$rent->getArrayRent($arg);
				$data['keyWord']=$nameFind;
				$data['province_id']=$province_id;
				$data['district_id']=$district_id;
				$data['ward_id']=$ward_id;

				
				$this->render('indexNews',$data);
			}else{
				$this->redirect('error-404');
			}
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
				$this->redirect('error-404');
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
			$check=$rentModel->browsingNew($arg);
			//dump($check);
			$this->redirect('ctr=rents&act=getIndex&currentPage=1&keyWord=');

		}
	}	
 //index.php?ctr=rents&act=getIndex
?>	