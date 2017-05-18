<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/admin/framework/controllerAdmin.php';
	/**
	* 
	*/
	class ErrorController extends controllerAdmin
	{
		
		function error404()
		{
			$this->render('error404');
		}
	}
?>