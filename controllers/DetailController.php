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
			$rent = new Rent();
			$user = new User();
			$type = new Type();
			$address = new Address();
			$data['rent'] = $rent -> getRentById(12);
			$data['user'] = $user -> getUserById($data['rent']['user_id']);
			$data['type'] = $type -> getTypeById($data['rent']['type_id']);
			$data['province'] = $address->getArrayProvince();
			$this->render('post-detail',$data);
		
	}
	
}