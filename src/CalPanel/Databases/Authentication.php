<?php

	namespace CalPanel\Databases\Authentication;
	
	/* Ill let you figure these out on your own */
	function GetHost() 		{ return "localhost"; }
	function GetPort() 		{ return 3306; }
	function GetUsername() 	{ return "root"; }
	function GetPassword() 	{ return "usbw"; }
	function GetDatabase() 	{ return "livecoding_calpanel"; }
	function GetOptions()	{ return array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'); }
	
	/* Displays connection string when DB Connection fails 
	 * Will also Display any MYSQL Errors to Users */
	function DebugCon()		{ return true; }	// DEFAULT: FALSE  
	
	/* Causes the Page to stop Loading if DB Connection fails */
	function DieOnError()	{ return true; 	}	// DEFAULT: TRUE 
	
	
	function GetPDO() 	{ 
		// -----------------------------
		$dbHost 		= GetHost();
		$dbPort 		= GetPort();
		$dbDatabase 	= GetDatabase();
		// -----------------------------
		$dbUsername		= GetUsername();
		$dbPassword 	= GetPassword();
		$dbOptions 		= GetOptions();
		// -----------------------------
		
		
		$databaseString = "";
		if($dbPort != 3306) { // If the port is not Default, add Port Argument.
			$databaseString = "mysql:host={$dbHost};port={$dbPort};dbname={$dbDatabase};charset=utf8";
		} else {
			$databaseString = "mysql:host={$dbHost};dbname={$dbDatabase};charset=utf8";
		}
		
		$dbPDO = false; 
		try {
			$dbPDO = new \PDO($databaseString, $dbUsername, $dbPassword, $dbOptions);
			
			if(DebugCon()) {
				$dbPDO->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
				$dbPDO->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
			}
		} catch(PDOException $ex) {
			$dieString = "Failed to connect to the panel's database, Please contact a Server Administrator or Staff Member.";
			
			if(DebugCon()) {
				$dieString = (
					"Failed to connect to the panel's database".
					", please try again later [2].<br> Database connect string: $databaseString <br>". 
					$ex->getMessage()
				);
			}
			
			if($dieOnError) 
				die($dieString);
			
			$dbPDO = false;
		}
		
		
		
		return $dbPDO; 
	}
?>