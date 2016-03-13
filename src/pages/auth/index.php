<?php
		
	DEFINE("DIRECTORY_PREPEND", "../../", true);
	
	include(DIRECTORY_PREPEND. "PHPINC.php");

	IncludeEveryDependancy();
	
	use CalPanel\Databases\Authentication;
	
	$pdo = Authentication\GetPDO();
	$database = Authentication\GetDatabase();
	
	if($pdo == false) {
		die ("Could not connect");
	} else {
		echo ("Connected to database: ". $database. "<br>");
	}
	
	// Test account
	$rUser = new CalPanel\Authentication\Registration\UserRegistration(); {
		// Test Email
		$email = "cal@c.com";
		$status = $rUser->SetEmail($email, $reason);
		echo ("Email: $email, Status: $status, Reason: $reason<br>");
		
		// Test Username
		$username = "callumc";
		$status = $rUser->SetName($username, $reason);
		echo ("Username: $username, Status: $status, Reason: $reason<br>");
		
		// Set our User Data
		// THATS RIGHT i was Born on the first of the 2nd in the 3rd year
		// Its true check the yearbook for Jesus's graduation.
		$rUser->SetData("Callum Carmicheal", "1.2.3"); 
		
		$rUser->Register();
	}
	
	
?>