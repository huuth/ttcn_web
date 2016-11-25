<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/framework/base/Controller.php';
/**
*  
*/
class AddnewsController extends Controller{
	public function getAddNews(){
		$this->render('add-news');
	}

	public function addNews(){
		$this->render('home');
	}

	public function postNews(){
		$this->render('home');
	}
}