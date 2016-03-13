<?php
	DEFINE("DIRECTORY_PREPEND", "../", true);
	
	include(DIRECTORY_PREPEND. "PHPINC.php");
	
	use CalPanel\Structure;
	use CalPanel\Structure\Sidebar;
	
	IncludeEveryDependancy();
	
	echo Structure\HTML\Base\Start(); {
		/* Render the Header */
		echo Structure\HTML\Headers\Start(); {
			echo Structure\HTML\Headers\AddDefaultHeaders(DIRECTORY_PREPEND);
		} echo Structure\HTML\Headers\End();
		
		echo CalPanel\Structure\Lockscreen\Lockscreen\CreateLockscreen(
			"example.com",
			"Callum Carmicheal",
	
			"http://localhost:8080/Avalon/NewPanelDesign/calpanel/Generated/src/assets/calpanel/img/user/DefaultImage.jpg",
			"http://i.imgur.com/AxuVj2Q.jpg"
		);
	} echo Structure\HTML\Base\End();
	
?>