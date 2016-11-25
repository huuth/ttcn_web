<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/framework/base/Controller.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/Address.php';
/**
*  
*/
class HomeController extends Controller{
	public function getIndex(){
		$address = new Address();
		$data['province'] = $address->getArrayProvince();
		$this->render('home',$data);
	}
}

