<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/framework/base/Controller.php';
/**
*  
*/
class DetailController extends Controller{
	public function getIndex(){
		$this->render('post-detail');
	}
	
}