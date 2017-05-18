<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/framework/base/Controller.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/User.php';
/**
*  
*/
class AuthController extends Controller{
	public function getLogin(){
		$this->render('auth/login');
	}
	public function postLogin(){
		$user = new User();
		if(isset($_POST['submit'])){
			$email = $_POST['email'];
			$password = $_POST['password'];
			$check = $user->getUser($email,$password);
			if($check == 0){
				$_SESSION['warning'] = 1;
				$this->redirect('ctr=auth&act=getLogin');
			}else if($check == -1){
				$this->redirect('ctr=error&act=error404');
			}else{
				$_SESSION['user_infor'] = $check;				
				$this->redirect('ctr=home&act=getIndex');
			}
		}
	}
	public function getRegister(){
		$this->render('auth/register');
	}	
	public function postRegister(){
		if(isset($_SESSION['temp_confirm_phone'])){
			unset($_SESSION['temp_confirm_phone']);
		}
		$user = new User();
		$args = [];
		$count = 0;
		if(isset($_POST['submit'])){
			// var_dump($_POST);
			if(!empty($_POST['name'])){
				$args['username'] = $_POST['name'];
				$args['name_display'] = $args['username'];
				$count++;
			}
			if(!empty($_POST['password'])){
				$args['password'] = $_POST['password'];
				$count++;
			}
			if(!empty($_POST['email'])){
				$args['email'] = $_POST['email'];
				$count++;
			}
			if(!empty($_POST['phone'])){
				$args['phone'] = $_POST['phone'];
				$count++;
			}
			if($count == 4){			
				$args['auth'] = 0;
				$check = $user->getUser($args['email']);
				if( $check == -1 ){//error 404	
					$this->redirect('ctr=error&act=error404');
				}else if($check == 0){ //email don't exists yet					
					$temp['random_number']  = mt_rand(1000,9999);
					$temp['phone'] = '84' . intval($args['phone']);
					$_SESSION['random_number'] = $temp['random_number'];
					$_SESSION['temp_confirm_phone'] = $args;
					$result_sms = $this->sendSMSConfirm($temp);
					if($result_sms == 103){
						echo 'tai khoan het tine ^ _ ^';
						exit();
					}
					if($result_sms == 100){
						$this->redirect('ctr=auth&act=getSMSConfirm');
					}else{
						$this->redirect('ctr=error&act=error404');
					}

				}else{//email already existed			
					$_SESSION['existed_mail'] = 1;
					$this->redirect('ctr=auth&act=getRegister');
				}
			}else{
				$this->redirect('ctr=error&act=error404');
			}
		}else{
			$this->redirect('ctr=auth&act=getRegister');
		}	
	}
	public function logout(){
		unset($_SESSION['user_infor']);
		$this->redirect('ctr=home&act=getIndex');
	}
	public function getSMSConfirm(){
		if(isset($_SESSION['temp_confirm_phone']) && isset($_SESSION['random_number'])){
			$this->render('sms-confirm');
		}
	}
	public function postSMSConfirm(){
		$user = new User();
		if(isset($_POST['submit']) && isset($_POST['verify_number'])){
			if($_SESSION['random_number'] == intval($_POST['verify_number'])){			
				if(!$user->addUser($_SESSION['temp_confirm_phone'])){
					$this->redirect('ctr=error&act=error404');
				}
				$_SESSION['success'] = 1;
				unset($_SESSION['random_number']);
				unset($_SESSION['temp_confirm_phone']);
				$this->redirect('ctr=auth&act=getLogin');
			}
		}else{
			$this->redirect('ctr=error&act=error404');
		}
	}
	private function sendSMSConfirm($args = []){
		//$api_key = '770AAB1CA46C84215C9A2B56907045';
		//$secret_key = '9744E42BC44123EF84E3490A926D74';
		$api_key = 'B97C3655C493D57BD4BD0CA371BE46';
		$secret_key = 'BA36486468DDB8B4A4AE37501287FF';
		$content = 'Ma xac nhan cua ban la: '.$args['random_number'];

		$content = urlencode($content);
		$url = 'http://api.esms.vn/MainService.svc/xml/SendMultipleSMS_v3?'
				.'Phone='.$args['phone'].'&'
				.'Content='.$content.'&'
				.'ApiKey='.$api_key.'&'
				.'SecretKey='.$secret_key.'&'
				.'SmsType=7';
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);

		$xml = simplexml_load_string($response);
		$json = json_encode($xml);
		$array = json_decode($json,TRUE);
		
		return intval($array['CodeResult']);
		// var_dump($array);

	}
}