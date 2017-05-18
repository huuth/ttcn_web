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
			if($result){
				return $result;
			}else{
				return false;
			}
		}catch(PDOException $e){
			return false;
		}

	}
	public function getProvinceById($id){
		try{
			$conn = $this->connect();
			$sql = "SELECT * FROM province where provinceid =:id ";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':id',$id,PDO::PARAM_STR,12);
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$result = $stmt->fetchAll();
			if($result){
				return $result[0];
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
			$sql = "SELECT (provinceid) FROM province WHERE name LIKE :name";
			$stmt = $conn->prepare($sql);
			$temp = "%".$name."%";
			$stmt->bindParam(':name',$temp);
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$result = $stmt->fetchAll();			
			if($result){
				return $result[0]['provinceid'];
			}else{
				return false;
			}
		}catch(PDOException $e){
			return false;
		}
	}
	public function getArrayDistrict($provinceid){
		try{
			$conn = $this->connect();
			$sql = "SELECT * FROM district WHERE provinceid =:id ";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':id',$provinceid,PDO::PARAM_STR,12);
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
	public function getDistrictById($id){
		try{
			$conn = $this->connect();
			$sql = "SELECT * FROM district where districtid = :id";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':id',$id,PDO::PARAM_STR,12);
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$result = $stmt->fetchAll();
			if($result){
				return $result[0];
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
			$sql = "SELECT (districtid) FROM district WHERE name LIKE :name";
			$stmt = $conn->prepare($sql);
			$temp = "%".$name."%";
			$stmt->bindParam(':name',$temp);
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$result = $stmt->fetchAll();
			if($result){
				return $result[0]['districtid'];
			}else{
				return false;
			}
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
			$stmt->bindParam(':id',$districtid,PDO::PARAM_STR,12);
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
	public function getWardById($id){
		try{
			$conn = $this->connect();
			$sql = "SELECT * FROM ward where wardid = :id";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':id',$id,PDO::PARAM_STR,12);
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$result = $stmt->fetchAll();
			if($result){
				return $result[0];
			}else{
				return false;
			}
		}catch(PDOException $e){
			return false;
		}

	}
	public function getIdWardByName($name){
		try{
			$conn = $this->connect();
			$sql = "SELECT (wardid) FROM ward where name LIKE :name";
			$stmt = $conn->prepare($sql);
			$temp = "%".$name."%";
			$stmt->bindParam(':name',$temp);
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$result = $stmt->fetchAll();
			if($result){
				return $result[0]['wardid'];
			}else{
				return false;
			}
		}catch(PDOException $e){
			return false;
		}

	}



}
