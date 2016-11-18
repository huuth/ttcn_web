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
			$sql  = "INSERT INTO USER (username,password,name_display,email,auth) VALUES (:username,:password,:name_display,:email,:auth)";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':username',$args['name']);
			$stmt->bindParam(':password',md5($args['password']));
			$stmt->bindParam(':name_display',$args['name']);
			$stmt->bindParam(':email',$args['email']);
			$stmt->bindParam(':auth',$args['auth']);			
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
				return $result;
			}else{
				return false;
		}
		}catch(PDOException $e){
			return false;
		}
	}
}
