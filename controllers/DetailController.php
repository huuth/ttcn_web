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
			if(isset($_GET['rent_id'])){
				$data['rent'] = $rent -> getRentById($_GET['rent_id']);
				if(empty($data['rent'])){
					$this->redirect('ctr=error&act=error404');
				}else{
					$data['user'] = $user -> getUserById($data['rent']['user_id']);
					$data['type'] = $type -> getTypeById($data['rent']['type_id']);
					$data['image']= $rent -> getArrayImgByRentId($_GET['rent_id']);
					$this->render('post-detail',$data);			
				}
			}else{
				$this->redirect('ctr=error&act=error404');
			}
			
		
	}
	
}