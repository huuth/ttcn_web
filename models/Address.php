<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/framework/base/Model.php';
/**
* 
*/
class Address extends Model {
	
	public function getArrayProvince(){
		try{
			$resultArr = array();
			$conn = $this->connect();
			$sql = "SELECT * FROM province ";
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$result = $stmt->fetchAll();
			foreach($result as $row){
   				 $resultArr[] = $row;
			}
			return $resultArr;
		}catch(PDOException $e){
			return false;
		}

	}
	public function getArrayDistrict($provinceid){
		try{
			$resultArr= array();
			$conn = $this->connect();
			$sql = "SELECT * FROM district WHERE provinceid=:id ";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':id',$provinceid);
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$result = $stmt->fetchAll();
			foreach($result as $row){
   				 $resultArr[] = $row;
			}
			return $resultArr;
		}catch(PDOException $e){
			return false;
		}

	}
	public function getArrayWard($districtid){
		try{
			$resultArr = array();
			$conn = $this->connect();
			$sql = "SELECT * FROM ward WHERE districtid=:id ";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':id',$districtid);
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$result = $stmt->fetchAll();
			foreach($result as $row){
   				 $resultArr[] = $row;
			}
			return $resultArr;
		}catch(PDOException $e){
			return false;
		}

	}



}
