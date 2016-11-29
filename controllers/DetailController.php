<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/framework/base/Controller.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/Rent.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/User.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/Type.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/Address.php';
/**
*  
*/
class DetailController extends Controller{
	public function getIndex(){
			$rentModel = new Rent();
			$userModel = new User();
			$typeModel = new Type();
			$addressModel = new Address();
			if(isset($_GET['rent_id'])){
				$data['rent'] = $rentModel -> getRentById($_GET['rent_id']);
				if(empty($data['rent'])){
					$this->redirect('ctr=error&act=error404');
				}else{
					$data['user'] = $userModel -> getUserById($data['rent']['user_id']);
					$data['type'] = $typeModel -> getTypeById($data['rent']['type_id']);
										
					$data['rent']['img'] = $rentModel->getArrayImgByRentId($data['rent']['rent_id']);
					$district = $addressModel->getDistrictById($data['rent']['district_id']);
					$province = $addressModel->getProvinceById($data['rent']['province_id']);
					$data['rent']['address_detail'] .= ', Quận '.  $district['name'] . ', ' . $province['name'];				
					$this->render('post-detail',$data);	
				}
			}else{
				$this->redirect('ctr=error&act=error404');
			}
			
		
	}
	
}