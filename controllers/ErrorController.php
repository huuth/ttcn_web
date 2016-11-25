<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/framework/base/Controller.php';
/**
*  
*/
class ErrorController extends Controller{
	public function error404(){
		$this->render('error-404');
	}
}