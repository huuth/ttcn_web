<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/framework/base/Controller.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/Type.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/Rent.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/Address.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/libs/CVarDumper.php';
/**
*  
*/
class HomeController extends Controller{
	public function getIndex(){		
		$typeModel = new Type();
		$rentModel = new Rent();
		$addressModel = new Address();
		$data['typeList'] = $typeModel -> getArrayType();
		$args['limit'] = 6;
		$arrayRents = [];
		foreach ($data['typeList'] as $type) {
			$args['type_id'] = $type['type_id'];
			$data['arrayRent'][$type['type_id']] = $rentModel->getArrayRent($args);			
		}		
		foreach ($data['arrayRent'] as $key1 => $rentByType) {
			foreach ($rentByType as $key2 => $rent) {
				$data['arrayImg'][$rent['rent_id']] = $rentModel->getArrayImgByRentId($rent['rent_id']);
				$district = $addressModel->getDistrictById($rent['district_id']);
				$province = $addressModel->getProvinceById($rent['province_id']);
				$data['arrayRent'][$key1][$key2]['address_detail'] .= ', Quận '.  $district['name'] . ', ' . $province['name'];
			}			
		}			
		//dump($data);
		$this->render('home',$data);
	}
}

