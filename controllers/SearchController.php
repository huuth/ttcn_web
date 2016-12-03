<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/framework/base/Controller.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/Rent.php';
/**
*  
*/
class SearchController extends Controller{
	public function getRent(){

		$this->render('search');
	}
}