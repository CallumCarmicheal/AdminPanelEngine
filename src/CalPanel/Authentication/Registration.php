<?php
	
	namespace CalPanel\Authentication\Registration;
	
	class UserRegistration {
	
		private $Username 		= "";
		private $Email 			= "";
		private $Fullname		= "";
		private $DateOfBirth 	= "";
	
		function __construct() {}
	
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
		
	
	
		public function Register() {
			
		}
	}
?>