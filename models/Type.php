<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/framework/base/Model.php';
/**
* 
*/
class Type extends Model {
	// add new user to database
	public function addType($type_name){
		try {
			$conn = $this->connect();
			$sql  = "INSERT INTO type (type_name) VALUES (:type_name)";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':type_name',$type_name);
			$stmt->execute();
			return true;
	    }catch(PDOException $e){	    	
	    	return false;//error 404
	    }
	}
	public function editType($args = []){
		try {
			$conn = $this->connect();
			$sql  = "UPDATE TYPE 
					 SET type_name=:type_name
					 WHERE type_id:type_id";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':type_name',$args['type_name']);
			$stmt->bindParam(':type_id',$args['type_id']);				
			$stmt->execute();
			return true;
	    }catch(PDOException $e){	    	
	    	return false;//error 404
	    }
	}
	public function deleteType($id){
		try {
			$conn = $this->connect();
			$sql  = "DELETE FROM type WHERE type_id = :type_id";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':type_id',$args['type_id']);				
			$stmt->execute();
			return true;
	    }catch(PDOException $e){	    	
	    	return false;//error 404
	    }
	}
	
	public function getArrayType(){
		try{
			$conn = $this->connect();
			$sql = "SELECT * FROM type ";
			$stmt = $conn->prepare($sql);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->execute();
			$result = $stmt->fetchAll();
			return $result;
		}catch(PDOException $e){
			return false;
		}

	}


}
