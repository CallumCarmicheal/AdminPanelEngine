<?php
	DEFINE("DIRECTORY_PREPEND", "../../", true);

	include(DIRECTORY_PREPEND. "PHPINC.php");

	use CalPanel\Structure;
	use CalPanel\Structure\Sidebar;
	use CalPanel\Structure\Input as Input;
	use CalPanel\Structure\Headers as Headers;
	use CalPanel\Template\Standard as Webpage;

	IncludeEveryDependancy();

	Webpage\Start(); {
		/* Header */ {
			echo Headers\CreateHeader("Authentication Dashboard", "Welcome this is where we steal your passwords");
		}
		
		/* Content */ {
			echo Input\Link\createLabel("register.php", "Click me to register.");
			echo "<br>";
			echo Input\Link\createLabel("login.php", "Click me to login.");
		}
		
		/* Footer */ {

		}
	} Webpage\End();
?>