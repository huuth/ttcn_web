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
	public function getIdTypeByName($name){
		try{
			$conn = $this->connect();
			$sql = "SELECT (type_id) FROM type WHERE type_name LIKE :name";
			$stmt = $conn->prepare($sql);
			$temp = "%".$name."%";
			$stmt->bindParam(':name',$temp);
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$result = $stmt->fetchAll();			
			if($result){
				return $result[0]['type_id'];
			}else{
				return false;
			}
		}catch(PDOException $e){
			return false;
		}
	}
	public function getTypeById($type_id){
		try{
			$conn = $this->connect();
			$sql = "SELECT * FROM type where type_id = :id";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':id',$type_id);
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$result = $stmt->fetchAll();
			if($result){
				return $result;
			}else{
				return false;
			}
		}catch(PDOException $e){
			return false;
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
