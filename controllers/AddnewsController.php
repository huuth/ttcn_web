<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/framework/base/Controller.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/Address.php';

/**
*  
*/
class AddnewsController extends Controller{
	

	public function getAddNews(){
		$this->render('add-news');
	}

	public function addNews(){
		$this->render('home');
	}

	public function postNews(){
		$this->render('home');
	}

	public function getProvince(){
		$address = new Address();
		$provinceList = $address->getArrayProvince();
		$res = '<option value="0" selected="selected">&laquo;Chọn tỉnh /  thành phố&raquo;</option>';
		foreach ($provinceList as $pro) {
			$id = $pro['provinceid'];
			$name = $pro['name'];
			$res = $res . '<option value='. $id . '>' . $name . '</option>';
		}
		echo $res;
	}
	public function getDistrict(){
		$address = new Address();
		$distId = $_GET['id'];
		$districtList = $address->getArrayDistrict($distId);
		$res = '';
		foreach ($districtList as $dist) {
			$id = $dist['districtid'];
			$name = $dist['name'];
			$res = $res . '<option value='. $id . '>' . $name . '</option>';
		}
		echo $res;
	}

	public function getWard(){
		$address = new Address();
		$wardId = $_GET['id'];
		$wardList = $address->getArrayWard($wardId);
		$res = '';
		foreach ($wardList as $ward) {
			$id = $ward['wardid'];
			$name = $ward['name'];
			$res = $res . '<option value='. $id . '>' . $name . '</option>';
		}
		echo $res;
	}
}