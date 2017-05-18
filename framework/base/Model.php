<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/libs/CVarDumper.php';
include_once __DIR__ . '/config.php';
class Model{
	public function connect(){
	    try {
	        $conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8",DB_USER,DB_PASSWORD);
	        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	    } catch (Exception $ex) {
	         echo 'Ket noi that bai: ' . $ex->getMessage();
	    }
	    return $conn;
	}	
}
