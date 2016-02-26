<?php
	
	function GetPDO() 	{ 
		// -----------------------------
		$dbHost 		= "localhost";
		$dbPort 		= 3306;
		$dbDatabase 	= "panels";
		// -----------------------------
		$dbUsername		= "root";
		$dbPassword 	= "usbw";
		$dbOptions 		= array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');;
		// -----------------------------
		
		
		$databaseString = "";
		if($dbPort != 3306) { // If the port is not Default, add Port Argument.
			$databaseString = "mysql:host={$dbHost};port={$dbPort};database={$dbDatabase};charset=utf8";
		} else {
			$databaseString = "mysql:host={$dbHost};database={$dbDatabase};charset=utf8";
		}
		
		$dbPDO = false;
		try {
			$dbPDO = new PDO($databaseString, $dbUsername, $dbPassword, $dbOptions);
		} catch(PDOException $ex) {
			//$dieString = "Failed to connect to the panel's database, Please contact a Server Administrator or Staff Member.";

				$dieString = (
					"Failed to connect to the panel's database".
					", please try again later [2].<br> Database connect string: $databaseString <br>". 
						$ex->getMessage()
				);
			
			if($dieOnError) 
				die($dieString);
			
			$dbPDO = false;
		}
		
		
		return $dbPDO; 
	}
	
?>