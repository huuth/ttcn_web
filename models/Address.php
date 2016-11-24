<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/framework/base/Model.php';
/**
* 
*/
class Address extends Model {
	
	public function getArrayProvince(){
		try{
			$conn = $this->connect();
			$sql = "SELECT * FROM province ";
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$result = $stmt->fetchAll();
			return $result;
		}catch(PDOException $e){
			return false;
		}

	}
	public function getProvinceById($id){
		try{
			$conn = $this->connect();
			$sql = "SELECT * FROM province where provinceid = :id";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':id',$id);
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
	public function getIdProvinceByName($name){
		try{
			$conn = $this->connect();
			$sql = "SELECT (name) FROM province WHERE name LIKE '%:name%'";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':name',$name);
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
	public function getArrayDistrict($provinceid){
		try{
			$conn = $this->connect();
			$sql = "SELECT * FROM district WHERE provinceid=:id ";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':id',$provinceid);
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$result = $stmt->fetchAll();
			return $result;
		}catch(PDOException $e){
			return false;
		}

	}
	public function getDistrictById($id){
		try{
			$conn = $this->connect();
			$sql = "SELECT * FROM district where districtid = :id";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':id',$id);
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
	public function getIdDistrictByName($name){
		try{
			$conn = $this->connect();
			$sql = "SELECT (name) FROM district WHERE name LIKE '%:name%'";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':name',$name);
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
			return $result;
			
		}catch(PDOException $e){
			return false;
		}

	}
	public function getWardtById($id){
		try{
			$conn = $this->connect();
			$sql = "SELECT * FROM ward where wardid = :id";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':id',$id);
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
	public function getIdWardtByName($name){
		try{
			$conn = $this->connect();
			$sql = "SELECT (name) FROM ward where name LIKE '%:name%'";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':name',$name);
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



}
