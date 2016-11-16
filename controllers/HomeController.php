<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/framework/base/Controller.php';
/**
*  
*/
class HomeController extends Controller{
	public function getIndex(){
		$this->render('home');
	}
}