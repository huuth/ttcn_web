<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/framework/base/Controller.php';
/**
*  
*/
class AuthController extends Controller{
	public function getLogin(){
		$this->render('auth/login');
	}
	public function getRegister(){
		$this->render('auth/register');
	}
}