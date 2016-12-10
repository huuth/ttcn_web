<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/libs/CVarDumper.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/framework/base/Controller.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/Rent.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/User.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/Type.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/Address.php';
/**
*  
*/
class AccountController extends Controller{
	public function getIndex(){		
		$rentModel = new Rent();
		$userModel = new User();
		$typeModel = new Type();
		$addressModel = new Address();		
		if(isset($_GET['user_id'])){
		$user_id = $_GET['user_id'];
		$data['user'] = $userModel -> getUserById($user_id);
			if(empty($data['user'])){
				$this->redirect('ctr=error&act=error404');
			}else{
				$data['user']['rent'] = $rentModel -> getRentByUserId($user_id);
				$this->render('detail-acc',$data);
			}
		}else{
			$this->redirect('ctr=error&act=error404');
		}
			
	}

	public function editUser(){
			$user=new User();
			$user_id=$_GET['user_id'];
			$account = $user -> getUserById($user_id);
			if (isset($_POST['old_password'])){
				if(md5($_POST['old_password']) != $account['password']){
					$_SESSION['check_pass'] = -1;
					$this->redirect('ctr=account&act=getIndex&user_id='.$user_id);
				}
			}
			$pass=$_POST['new_password'];
			$name_display=trim($_POST['full_name']);
			$phone=trim($_POST['phone']);
			$email=trim($_POST['email']);
			$auth='0';
			$image_url='12';
			$gender='f';
			$province_id=$_POST['province_id'];
			$district_id='0';
			$ward_id='0';
			if (isset($_POST['district_id'])){
				$district_id=$_POST['district_id'];
			}
			if (isset($_POST['ward_id'])){
				$ward_id=$_POST['ward_id'];
			}
			$address_detail='0';
			$arg = array('password' => $pass,
						'phone' =>$phone,
						'name_display' => $name_display,
						'email' => $email,
						'image_url' => $image_url,
						'gender' => $gender,
						'auth' => $auth,
						'province_id' => $province_id,
						'district_id' => $district_id,
						'ward_id' => $ward_id,
						'address_detail' => $address_detail,
						'user_id' => $user_id);
			
			$check=$user -> editUser($arg);
			$converted_check=$check ? 'true' : 'false';
			$this->redirect('ctr=account&act=getIndex&user_id='.$user_id);
		}
	
}
