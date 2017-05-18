<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/admin/framework/ControllerAdmin.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/Address.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/Type.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/Rent.php';

/**
*  
*/
class AddnewsController extends ControllerAdmin{	
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
		$res = '<option value="0" selected="selected">&laquo;Chọn quận /  huyện&raquo;</option>';
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
		$res = '<option value="0" selected="selected">&laquo;Chọn xã / phường&raquo;</option>';
		foreach ($wardList as $ward) {
			$id = $ward['wardid'];
			$name = $ward['name'];
			$res = $res . '<option value='. $id . '>' . $name . '</option>';
		}
		echo $res;
	}

	public function getType(){
		$typeModel = new Type();
		$typeList = $typeModel -> getArrayType();
		$res = '<option value="0">&laquo;Chọn loai tin&raquo;</option>';
		foreach ($typeList as $type) {
			$typeId = $type['type_id'];
			$typeName = $type['type_name'];
			$res = $res . '<option value='. $typeId . '>' . $typeName . '</option>';
		}
		echo $res;
	}

	
}