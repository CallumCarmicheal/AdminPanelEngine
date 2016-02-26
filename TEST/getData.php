<?php
	
	include("Database.php");
	
	// Set your Query here
	$Table 	= "id";
	$Query 	= "SELECT * FROM panels.panels";
	$Args 	= array();	// GOOGLE HOW TO DO THIS, W3SCHOOLS
	
	$pdo = getPDO();
	
	$result = $pdo->prepare($Query);
	$result->execute();
	
	$rowCount = $result->rowCount();
	echo json_encode($result->fetchAll(PDO::FETCH_NAMED));
?>