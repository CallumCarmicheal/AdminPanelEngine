<?php
	
	function InitDependancies() {
		//require_once("CalPanel/Skinning/Headers.php");
	}
	
	
	function _require_all($dir, $depth=0) {
		if ($depth > 50) {
			return;
		}
		// require all php files
		$scan = glob("$dir/*");
		foreach ($scan as $path) {
			if (preg_match('/\.php$/', $path)) {
				echo "Included $path <br>";
				require_once $path;
			} else if (is_dir($path)) {
				_require_all($path, $depth+1);
			}
		}
	}
	
	// Used for Testing, DO NOT INCLUDE EVERYFILE!
	function IncludeEveryDependancy() {
		// Just found what i need online, might aswell use that
		// StackOverflow to the rescue!
		
		$dir = "CalPanel/";
		
		_require_all($dir);
	}
	
?>