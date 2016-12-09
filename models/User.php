<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/framework/base/Model.php';
/**
* 
*/
class User extends Model {
	// add new user to database
	public function addUser($args = []){
		try {
			$conn = $this->connect();
			$sql  = "INSERT INTO USER (username,password,name_display,email,auth,phone) VALUES (:username,:password,:name_display,:email,:auth,:phone)";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':username',$args['username']);
			$stmt->bindParam(':password',md5($args['password']));
			$stmt->bindParam(':name_display',$args['name_display']);
			$stmt->bindParam(':phone',$args['phone']);
			$stmt->bindParam(':email',$args['email']);
			$stmt->bindParam(':auth',$args['auth']);	
			$stmt->bindParam(':phone',$args['phone']);					
			$stmt->execute();
			return true;
	    }catch(PDOException $e){	    	
	    	return false;//error 404
	    }
	}
	public function editUser($args = []){
		try {
			$conn = $this->connect();
			$sql  = "UPDATE USER" 
					 ." SET password =:password,phone=:phone,name_display =:name_display,email =:email,image_url =:image_url,"
					 ."gender =:gender,auth =:auth,province_id =:province_id,district_id =:district_id,ward_id =:ward_id,"
					 ."address_detail =:address_detail"
					 ." WHERE user_id =:user_id";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':password',md5($args['password']));
			$stmt->bindParam(':phone',$args['phone']);
			$stmt->bindParam(':name_display',$args['name_display']);
			$stmt->bindParam(':email',$args['email']);
			$stmt->bindParam(':image_url',$args['image_url']);
			$stmt->bindParam(':gender',$args['gender']);
			$stmt->bindParam(':auth',$args['auth']);
			$stmt->bindParam(':province_id',$args['province_id']);
			$stmt->bindParam(':district_id',$args['district_id']);
			$stmt->bindParam(':ward_id',$args['ward_id']);
			$stmt->bindParam(':address_detail',$args['address_detail']);
			$stmt->bindParam(':user_id',$args['user_id']);				
			$stmt->execute();
			return true;
	    }catch(PDOException $e){	   
	    	return false;//error 404
	    }
	}
	// overloading method getUser in php :))))
	public function __call($nameMethod,$args){
		try{
			$conn = $this->connect();
			switch ($nameMethod) {
				case 'getUser':
					switch (count($args)) {
						case 1:
							$sql = 'select * from user where email = :email';
							$stmt = $conn->prepare($sql);
							$stmt->bindParam(':email',$args[0]);
							break;
						case 2:
							$sql = 'select * from user where email = :email and password = :password';
							$stmt = $conn->prepare($sql);
							$stmt->bindParam(':email',$args[0]);
							$stmt->bindParam(':password',md5($args[1]));
							break;
						default:
							echo 'Incorrect parameter';
							exit();
							break;
					}
					$stmt->execute();
					$stmt->setFetchMode(PDO::FETCH_ASSOC);
					$result = $stmt->fetchAll();					
					if($result){
						unset($result[0]['password']);
						return $result[0];
					}else{
						return 0;
					}
					return $result;
					break;	
				default:
            		echo "the method does not exist"; 
            		exit();
            		break;			
			}
		}catch(PDOException $e){
			return -1;
		}
	}
	// get user information by user id
	public function getUserById($user_id){
		try{
			$conn = $this->connect();
			$sql = 'select * from user where user_id = :user_id';
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':user_id',$user_id);
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$result = $stmt->fetchAll();
			if($result){
				unset($result[0]['password']);
				return $result[0];
			}else{
				return false;
		}
		}catch(PDOException $e){
			return false;
		}
	}
	
	public function getArrayUser($args = []){
		try{
			$conn = $this->connect();
			$sql = "SELECT * from user where 1";
			if (isset($args['limit'])){
				if(empty($args['limit']['currentPage']) && $args['limit']['currentPage'] != 0){
					$sql = $sql . " ORDER BY user_id desc LIMIT ".'20';
				}else{
					$sql = $sql . " ORDER BY user_id desc LIMIT ".$args['limit']['currentPage'];
				}
				if(!empty($args['limit']['numberPage'])){					
					$sql = $sql . " , ".$args['limit']['numberPage'];
				}
				
			}
			$stmt = $conn->prepare($sql);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->execute();
			$result = $stmt->fetchAll();
			return $result;
		}catch(PDOException $e){
			return false;
		}

	}
	public function getTotalUser(){
		try{
			$conn = $this->connect();
			$sql = "SELECT count(*) AS totalRows FROM user ";
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$result = $stmt->fetchAll();
			if($result){
				return ($result[0]['totalRows']);
			}else{
				return false;
			}		
		}catch(PDOException $e){
			return false;
		}

	}


}
