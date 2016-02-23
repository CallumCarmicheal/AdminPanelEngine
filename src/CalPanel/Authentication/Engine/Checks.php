<?php
	namespace CalPanel\Authentication\Engine;

	use CalPanel\Authentication\Configuration;
	
	function IsLoggedIn() {
		if(empty($_SESSION[GetSessionID()])) {
			return false;
		} else {
			return true;
		}
	}
	
	function RedirectIF($Location, $ConditionResult) {
		if(IsLoggedIn() == $ConditionResult) {
			header("location: $Location");
			die("Redirecting to $Location");
		}
	}
?>
	