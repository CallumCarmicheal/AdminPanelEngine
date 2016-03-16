<?php
	DEFINE("DIRECTORY_PREPEND", "../", true);
	
	include(DIRECTORY_PREPEND. "PHPINC.php");
	
	use CalPanel\Structure;
	use CalPanel\Structure\Sidebar;

	use CalPanel\Structure\HTML 					as HTML;
	use CalPanel\Structure\Lockscreen\Lockscreen 	as Lockscreen;
	
	IncludeEveryDependancy();
	
	echo HTML\Base\Start(); {
		/* Render the Header */
		echo HTML\Headers\Start(); {
			echo HTML\Headers\AddDefaultHeaders(DIRECTORY_PREPEND);
		} echo HTML\Headers\End();
		
		echo Lockscreen\CreateLockscreen(
			"example.com",
			"Callum Carmicheal",
	
			"http://localhost:8080/Avalon/NewPanelDesign/calpanel/Generated/src/assets/calpanel/img/user/DefaultImage.jpg",
			"http://i.imgur.com/AxuVj2Q.jpg"
		);
	} echo Structure\HTML\Base\End();
	
?>