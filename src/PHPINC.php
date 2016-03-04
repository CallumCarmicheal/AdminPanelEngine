<?php
	// ---------------
		// ----- set mb_http_output encoding to UTF-8 -----
			mb_http_output('UTF-8');
		// ----- setup php for working with Unicode data -----
			mb_internal_encoding('UTF-8');
			mb_http_output('UTF-8');
			mb_http_input('UTF-8');
			mb_language('uni');
			mb_regex_encoding('UTF-8');
			ob_start('mb_output_handler');
	// ---------------


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
				//echo "Included $path <br>";
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
		
		$dir = DIRECTORY_PREPEND. "CalPanel/";
		
		_require_all($dir);
	}
	
?>