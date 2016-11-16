<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/framework/base/Controller.php';
/**
*  
*/
class SearchController extends Controller{
	public function getIndex(){
		$this->render('search');
	}
}