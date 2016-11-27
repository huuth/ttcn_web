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
		$this->render('add-news');
	}

	public function addNews(){
		$userId = 123;
		$rent_name = $_POST['rent_name'];
		$describe_rent = $_POST['describe_rent'];
		$price = $_POST['price'];
		$square = $_POST['square'];
		$province_id = $_POST['province_id'];
		$district_id = $_POST['district_id'];
		$ward_id = $_POST['ward_id'];
		$type_id = $_POST['type_id'];

		$args = array("userId" => $userId,
					"rent_name" => $rent_name,
					"describe_rent" => $describe_rent,
					"price" => $price,"square" => $square,
					"province_id" => $province_id,
					"district_id" => $district_id,
					"ward_id" => $ward_id,
					"type_id" => $type_id);

		$rentModel = new Rent();
		$rentId = $rentModel -> addRent($args);

		$thisCtr = new AddnewsController();

		$thisCtr -> uploadImage($rentId);

		$this->redirect('ctr=addnews&act=getAddNews');
	}

	public function uploadImage($rentId){
		$thisCtr = new AddnewsController();
		$listImage = $thisCtr -> uploadImageToData();

		$args = array("rent_id" => $rentId, "image_url" => $listImage);
		$rentModel = new Rent();
		$rentModel -> addImage($args);
	}

	public function uploadImageToData(){
		$valid_formats = array("jpg", "png", "gif", "bmp");
		$max_file_size = 2048*1028; //100 kb
		$path = "data/rent-images/"; // Upload directory
		$count = 0;
		$listImage = array();
		$message;
		if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
			// Loop $_FILES to exeicute all files
			foreach ($_FILES['files']['name'] as $f => $name) {     
			    if ($_FILES['files']['error'][$f] == 4) {
			        continue; // Skip file if any error found
			    }	       
			    if ($_FILES['files']['error'][$f] == 0) {	           
			        if ($_FILES['files']['size'][$f] > $max_file_size) {
			            $message = "$name is too large!.";
			            continue; // Skip large files
			        }
					elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
						$message= "$name is not a valid format";
						continue; // Skip invalid file formats
					}
			        else{ // No error found! Move uploaded files 
			        	array_push($listImage, $path.$name);
			            if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path.$name))
			            $count++; // Number of successfully uploaded file
			        }
			    }
			}
		}
		foreach ($listImage as $n) {
			$message = $message . $n . ",";
		}
		return $message;
		// $_SESSION['uploadMsg'] = $message . "RUN";
		// $this->redirect('ctr=addnews&act=getAddNews');
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
		$res = '<option value="0">&laquo;Chọn&raquo;</option>';
		foreach ($typeList as $type) {
			$typeId = $type['type_id'];
			$typeName = $type['type_name'];
			$res = $res . '<option value='. $typeId . '>' . $typeName . '</option>';
		}
		echo $res;
	}

	
}