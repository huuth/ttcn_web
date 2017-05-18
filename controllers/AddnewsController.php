<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/framework/base/Controller.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/Address.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/Type.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/Rent.php';

/**
*  
*/
class AddnewsController extends Controller{

	public function getAddNews(){
		if (!isset($_SESSION['user_infor'])){
			$this->redirect('ctr=auth&act=getLogin');
			return;
		}
		$this->render('add-news');
	}

	public function addNews(){
		if (!isset($_SESSION['user_infor'])){
			$this->redirect('ctr=auth&act=getLogin');
			return;
		}
		$user_id = $_SESSION['user_infor']['user_id'];
		// $user_id = 1234;
		$rent_name = $_POST['rent_name'];
		$describe_rent = $_POST['describe_rent'];
		$price = $_POST['price'];
		$square = $_POST['square'];
		$province_id = $_POST['province_id'];
		$district_id = $_POST['district_id'];
		$ward_id = $_POST['ward_id'];
		$address_detail = $_POST['address_detail'];
		$type_id = $_POST['type_id'];

		$listImage = $this -> uploadImageToData($user_id);

		$args = array("user_id" => $user_id,
					"rent_name" => $rent_name,
					"describe_rent" => $describe_rent,
					"price" => $price,
					"square" => $square,
					"province_id" => $province_id,
					"district_id" => $district_id,
					"ward_id" => $ward_id,
					"address_detail" => $address_detail,
					"type_id" => $type_id,
					"image_url" => $listImage);

		$rentModel = new Rent();
		$rentId = $rentModel -> addRent($args);
		// $_SESSION['rent_id'] = $rentId;
		$this->redirect('ctr=detail&act=getIndex&rent_id='.$rentId);
	}

	public function uploadImageToData($usr_id){
		$valid_formats = array("jpg", "png", "gif", "bmp");
		$max_file_size = 2048*1280; 
		$path = "data/rent-images/"; // Upload directory
		$count = 0;
		$listImage = array();
		$message;

		if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
			// Loop $_FILES to exeicute all files
			$fileList = $_FILES['files'];

			$index = count($fileList['name']);
			if (count($fileList['name']) > 9)
				$index = 9;
			for ($i=0; $i < $index; $i++) { 
				$name = $fileList['name'][$i];
			    if ($fileList['error'][$i] == 4) {
			        continue; // Skip file if any error found
			    }	       
			    if ($fileList['error'][$i] == 0) {	           
			        if ($fileList['size'][$i] > $max_file_size) {
			            $message = "$name is too large!.";
			            continue; // Skip large files
			        }
					elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
						$message= "$name is not a valid format";
						continue; // Skip invalid file formats
					}
			        else{ // No error found! Move uploaded files 
			        	$img_path = $path."ttcn". $usr_id ."_".$name;
		
			            if(move_uploaded_file($fileList["tmp_name"][$i], $img_path)){
			            	array_push($listImage, $img_path);
			            	$count++; // Number of successfully uploaded file
			        	}
			        }

			    }
			}
		}
		// foreach ($listImage as $n) {
		// 	$message = $message . $n . ",";
		// }
		return $listImage;
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