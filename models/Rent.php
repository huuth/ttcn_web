<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/framework/base/Model.php';
/**
* 
*/
class Rent extends Model {
	// add new user to database
	public function addRent($args = []){
		try {
			$conn = $this->connect();
			$sql  = "INSERT INTO rent" 
					."(rent_name,price,type_id,square,describe_rent,user_id,province_id,district_id,ward_id,address_detail)"
					."VALUES (:rent_name,:price,:type_id,:square,:describe_rent,:user_id,:province_id,:district_id,:ward_id,:address_detail)";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':rent_name',$args['rent_name']);
			$stmt->bindParam(':price',$args['price']);			
			$stmt->bindParam(':type_id',$args['type_id']);
			$stmt->bindParam(':square',$args['square']);
			$stmt->bindParam(':describe_rent',$args['describe_rent']);									
			$stmt->bindParam(':user_id',$args['user_id']);
			$stmt->bindParam(':province_id',$args['province_id']);
			$stmt->bindParam(':district_id',$args['district_id']);
			$stmt->bindParam(':ward_id',$args['ward_id']);
			$stmt->bindParam(':address_detail',$args['address_detail']);
			$stmt->execute();
			$lastId = $conn->lastInsertId();
			$this -> addImage ($args['image_url'],$lastId);
			if($lastId){
				return $lastId;
			}else{
				return false;
			}
	    }catch(PDOException $e){	    	
	    	return false;//error 404
	    }
	}

	public function addImage($args = [], $rent_id){
		try{
			$conn = $this -> connect();
			foreach ($args as $img ) {
				$sql = "INSERT INTO image (image_url,rent_id)
					VALUES (:image_url,:rent_id)";
				$stmt = $conn->prepare($sql);
				$stmt->bindParam(':image_url',$img);
				$stmt->bindParam(':rent_id',$rent_id);
				$stmt->execute();
			}
		}catch(PDOException $e){	    	
	    	return false;//error 404
	    }

	}
	public function deleteImgByRentId($rent_id){
		try {
			$conn = $this->connect();
			$sql  = "DELETE FROM image WHERE rent_id = :rent_id";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':rent_id',$args['rent_id']);				
			$stmt->execute();
			return true;
	    }catch(PDOException $e){	    	
	    	return false;//error 404
	    }
	}
	
	public function getArrayImgByRentId($id){
		try{
			$conn = $this->connect();
			$sql = "SELECT * FROM image WHERE rent_id=:id ";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':id',$id);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->execute();
			$result = $stmt->fetchAll();
			return $result;
		}catch(PDOException $e){
			return false;
		}
	}

	
	// edit information a rent
	public function editRent($args = []){
		try {
			$conn = $this->connect();
			$sql  = "UPDATE rent" 
					."SET" 
					."rent_name = :rent_name, price = :price, type_id= :type_id, square = :square," 
					."describe_rent = :describe_rent, post_time = :post_time, drop_time = :drop_time,"
					."status = :status, user_id = :user_id, province_id = :province_id, district_id = :district_id," 
					."ward_id = :ward_id, address_detail = :address_detail" 
					."WHERE rent_id = :rent_id";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':rent_name',$args['rent_name']);
			$stmt->bindParam(':price',$args['price']);
			$stmt->bindParam(':type_id',$args['type_id']);
			$stmt->bindParam(':square',$args['square']);
			$stmt->bindParam(':describe_rent',$args['describe_rent']);
			$stmt->bindParam(':post_time',$args['post_time']);
			$stmt->bindParam(':drop_time',$args['drop_time']);
			$stmt->bindParam(':status',$args['status']);
			$stmt->bindParam(':user_id',$args['user_id']);
			$stmt->bindParam(':province_id',$args['province_id']);
			$stmt->bindParam(':district_id',$args['district_id']);
			$stmt->bindParam(':ward_id',$args['ward_id']);
			$stmt->bindParam(':address_detail',$args['address_detail']);
			$stmt->bindParam(':rent_id',$args['rent_id']);			
			$stmt->execute();
			return true;
	    }catch(PDOException $e){	    	
	    	return false;//error 404
	    }
	}
	// delete a rent by rent_id
	public function deleteRent($rent_id){
		try {
			$conn = $this-> connect();
			$sql  = "DELETE FROM rent where rent_id=:rent_id";
			$sql  = $conn->prepare($sql);
			$stmt->bindParam(':rent_id',$args['rent_id']);
			$stmt->execute();
			return true;
		}catch(PDOException $e){
			return false;
		}
	}

	// get list rent
	public function getArrayRent($args = []){
		try{
			$conn = $this->connect();
			$sql = "SELECT * FROM rent WHERE 1 ";
			if (isset($args['rent_name'])){
				$sql = $sql . " && rent_name LIKE '%" .$args['rent_name'] . "%'";
			}
			if (isset($args['type_id'])){
				$sql = $sql . " && type_id = " .$args['type_id'];
			}
			if(isset($args['priceFrom'])){
				if(isset($args['priceTo'])){
					$sql = $sql . " && price >= ".$args['priceFrom']. " AND price <=" . $args['priceTo'];
				}else{
					$sql = $sql . " && price >= ".$args['priceFrom'];
				}
			}
			if (isset($args['square'])){
				$sql = $sql . " $$ square >= ". $args['squareFrom']. " AND price <= ".$args['priceTo'];
			}
			if (isset($args['post_time_from'])){
				if(isset($args['post_time_to'])){
					$sql = $sql . " && post_time BETWEEN " .$args['post_time_from'] . " AND " . $args['post_time_to'];
				}else{
					$sql = $sql . " && post_time =" .$args['post_time'];
				}
				
			}
			if (isset($args['status'])){
				$sql = $sql . " && status =" .$args['status'];
			}
			if (isset($args['province_id'])){
				$sql = $sql . " && province_id = " . $args['province_id'];
			}
			if (isset($args['district_id'])){
				$sql = $sql . " && district_id = " . $args['district_id'];
			}
			if (isset($args['ward_id'])){
				$sql = $sql . " && ward_id = ". $args['ward_id'];
			}

			$sql = $sql . " ORDER BY rent_id";
			if(isset($args['limit'])){
				$sql = $sql . " limit " . $args['limit'];
			}
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$resultArr = $stmt->fetchAll();
			return $resultArr;
		}catch(PDOException $e){
			return false;
		}

	}

	// get rent information by rent id
	public function getRentById($rent_id){
		try{
			$conn = $this->connect();
			$sql = 'SELECT * FROM rent WHERE rent_id = :rent_id';
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':rent_id',$rent_id);
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
	public function getTotalRent(){
		try{
			$conn = $this->connect();
			$sql = 'SELECT count(*)  FROM rent ';
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

}
