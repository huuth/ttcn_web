<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/framework/base/Controller.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/Type.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/Rent.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/libs/CVarDumper.php';
/**
*  
*/
class HomeController extends Controller{
	public function getIndex(){		
		$typeModel = new Type();
		$rentModel = new Rent();
		$data['typeList'] = $typeModel -> getArrayType();
		$args['limit'] = 6;
		$arrayRents = [];
		foreach ($data['typeList'] as $type) {
			$args['type_id'] = $type['type_id'];
			$data['arrayRent'][$type['type_id']] = $rentModel->getArrayRent($args);			
		}
		// dump($data['arrayRent'] );
		foreach ($data['arrayRent'] as  $rentByType) {
			foreach ($rentByType as $rent) {
				$data['arrayImg'][$rent['rent_id']] = $rentModel->getArrayImgByRentId($rent['rent_id']);
			}			
		}
		//dump($data);
		$this->render('home',$data);
	}
}

