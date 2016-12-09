<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/framework/base/Controller.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/Type.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/Rent.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/Address.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/libs/CVarDumper.php';
/**
*  
*/
class SearchController extends Controller{
	public function getRent(){
		$typeModel = new Type();
		$rentModel = new Rent();
		$addressModel = new Address();
		if(isset($_GET['province_id']) && $_GET['province_id'] != 0){
			$args['province_id'] = trim($_GET['province_id']);
		}
		if(isset($_GET['district_id']) && $_GET['district_id'] != 0){
			$args['district_id'] = trim($_GET['district_id']);
		}
		if(isset($_GET['ward_id']) && $_GET['ward_id'] != 0){
			$args['ward_id'] = trim($_GET['ward_id']);
		}
		if(isset($_GET['type_id']) && $_GET['type_id'] != 0){
			$args['type_id'] = intval(trim($_GET['type_id']));
		}
		if(isset($_GET['price'])){		
			$temp = explode(",",trim($_GET['price']));
			foreach ($temp as $key => $value) {
				$temp2[$key] = explode(":",trim($value));
				if(!empty($temp2[$key][1])){
					$args[$temp2[$key][0]] = intval($temp2[$key][1]);
				}												 			
			}				 
		}
		if(isset($_GET['currentPage'])){
			$args['limit']['currentPage'] = intval(trim($_GET['currentPage']));
			$data['pagination']['currentPage'] = $args['limit']['currentPage'];
		}else{
			$args['limit']['currentPage'] = 0;
			$data['pagination']['currentPage'] = 0;
		}
		if(isset($_GET['numberPage'])){
			$args['limit']['numberPage'] = intval(trim($_GET['numberPage']));
			$data['pagination']['numberPage'] = $args['limit']['numberPage'];
		}else{
			$args['limit']['numberPage'] = 6;
			$data['pagination']['numberPage'] = 6;
		}	
		$args['status'] = 1;
		$data['rent'] = $rentModel->getArrayRent($args);				
		foreach ($data['rent'] as $key => $rent) {
			$data['arrayImg'][$rent['rent_id']] = $rentModel->getArrayImgByRentId($rent['rent_id']);
			$district = $addressModel->getDistrictById($rent['district_id']);
			$province = $addressModel->getProvinceById($rent['province_id']);
			$data['rent'][$key ]['address_detail'] .= ', Quận '.  $district['name'] . ', ' . $province['name'];
		}			

		$data['pagination']['total'] = $rentModel->getTotalRent($args);			
		$this->render('search',$data);
	}	
}