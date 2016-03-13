<?php 

	namespace CalPanel\Databases\Query;
	

	//	Returns
	//		PDOException 
	//			Something went wrong
	function Exists($sql, $sqlParams, &$error) {
		$error = false;
		$pdo = \CalPanel\Databases\Authentication\GetPDO();
		
		if($pdo == false)  {
			$error = true;
			return false;
		}
		
		try {
			$stmt = $pdo->prepare($sql);
			$stmt->execute($sqlParams);
		} catch (\PDOException $ex) {
			die($ex->getMessage());
			
			$error = true;
			return $ex;
		} 
		
		
		
		return ($stmt->fetch() == true);
	}
	
	

	

?>