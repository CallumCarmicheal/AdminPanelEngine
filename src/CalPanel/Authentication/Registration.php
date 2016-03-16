<?php
	
	namespace CalPanel\Authentication\Registration;
	
	class UserRegistration {
	
		private $Username 		= "";
		private $Email 			= "";
		private $Fullname		= "";
		private $DateOfBirth 	= "";
		
		private $Password 		= "";
		private $Password_H	 	= "";
		
		private $debugMode 		= false;
		
		function __construct() {}
	
		public function SetPassword($password) {
			$password = $password; // Just dont question it
			$salt = "";
			
			/* Hash the password */ {
				$salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647));
				$password = hash('sha256', $password . $salt);
				
				for ($round = 0; $round < 65536; $round++) {
					$password = hash('sha256', $password . $salt);
				}
			}
			
			/* Store the password (Encrypted) */ {
				$this->Password = $password;
				$this->Password_H = $salt;
			}
		}
		
		public function SetData($fullname, $dob) {
			// May add more later
			$this->Fullname = $fullname;
			$this->DateOfBirth = $dob;
		}
		
		public function SetName($username, &$reason) {
			/* Check if name is valid */ {
				$table = \CalPanel\Databases\Tables\tableUsers_Auth();
				
				$sql = "SELECT 1 FROM $table WHERE username=:p1";
				$sqlParams = array ("p1" => $username);
				
				$result = \CalPanel\Databases\Query\Exists($sql, $sqlParams, $errorOccured);
				
				if($errorOccured) {
					$reason = "Error while searching the database [SE::0]";
					return false;
				}
				
				if(!$result) {
					$this->Username = $username;
					
					$reason = "Username is free";
					return true;
				} else {
					$reason = "Username is registered";
					return false;
				}
			}
			
			$reason = "No returns";
			return false;
		}
		
		public function SetEmail($email, &$reason) {
			/* Check if email is valid */ {
				// Check if email is valid
				if(!filter_var($email, FILTER_VALIDATE_EMAIL))  {
					$reason = "Email is in a incorrect format";
					return false;
				}
				
				/* Check if email exists in Database */ {
					$table = \CalPanel\Databases\Tables\tableUsers_Auth();
					
					$sql = "SELECT 1 FROM $table WHERE email=:p1";
					$sqlParams = array ("p1" => $email);
					
					$result = \CalPanel\Databases\Query\Exists($sql, $sqlParams, $errorOccured);
					
					if($errorOccured) {
						$reason = "Error while searching the database [SE::0]";
						return false;
					}
					
					if(!$result) {
						$this->Email = $email;
						
						$reason = "Email is free";
						return true;
					} else {
						$reason = "Email is registered";
						return false;
					}
				}
			}
			
			$reason = "No returns";
			return false;
		}
	
		public function Register(&$errorReason) {
			/* Check if the user exists */ {
				// Set the name again
				$valid = $this->SetName($this->Username, $errorReason);
				
				if(!$valid) 
					return false;
			}
			
			/* Check if the email exists */ {
				// Set the email again
				$valid = $this->SetEmail($this->Email, $errorReason);
				if(!$valid) 
					return false;
			}
			
			/* Now we insert the User Account */ {
				$pdoObject = \CalPanel\Databases\Authentication\GetPDO();
				$table = \CalPanel\Databases\Tables\tableUsers_Auth();
				
				$sql = "INSERT INTO $table (username, password, salt, email) VALUES (:u, :p, :s, :e);";
				$sqlParams = array (
					':u' => $this->Username,
					':p' => $this->Password,
					':s' => $this->Password_H,
					':e' => $this->Email
				);
				
				try {
					if($this->debugMode)
						$pdoObject->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
					
					$stmt = $pdoObject->prepare($sql);
					$stmt->execute($sqlParams);					
				} catch (\PDOException $ex) {
					if($this->debugMode) 
						die("Error while executing SQL <br> SQL: ". $sql. "<br>Error: ". $ex->getMessage());
					
					$errorReason = "Error while inserting into the database";
					return false;
				}
			}
			
			return true;
		}
		
		public function EnableDebugging() {
			$this->debugMode = true;
		}
		
		public function DisableDebugging() {
			$this->debugMode = false;
		}
		
		public function PUSHTHEDAMNTEXTUPTHESCREEN() { /* I Like having the text mid screen*/ }
	}
?>