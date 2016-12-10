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
		$data['user'] = $rentModel -> getRentById($_GET['user_id']);
			if(empty($data['user'])){
				$this->redirect('ctr=error&act=error404');
			}else{
				$data['user'] = $userModel -> getUserById($user_id);
				$data['user']['rent'] = $rentModel -> getRentByUserId($user_id);
				$this->render('detail-acc',$data);
			}
		}else{
			$this->redirect('ctr=error&act=error404');
		}
			
	}
	
}
