<?php
class ControllerAdmin{
	public function render($viewFile, $data = []) {
		ob_start();
		extract($data, EXTR_SKIP);
		include $_SERVER['DOCUMENT_ROOT']. '/admin/views/' . $viewFile . '.php';
	}
	public function redirect($url){
		die("<script>window.location.href = 'http://". $_SERVER['HTTP_HOST'] . "/admin/index.php?" . $url . "';</script>");		
	}
}