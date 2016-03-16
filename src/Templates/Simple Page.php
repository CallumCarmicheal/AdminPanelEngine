<?php
	DEFINE("DIRECTORY_PREPEND", "../", true);

	include(DIRECTORY_PREPEND. "PHPINC.php");

	use CalPanel\Structure\Headers 	as Headers;
	use CalPanel\Template\Standard 	as Webpage;

	IncludeEveryDependancy();

	Webpage\Start(); {
		/* Header */ {
			echo Headers\CreateHeader("Authentication Dashboard", "Welcome this is where we steal your passwords");
		}

		/* Content */ {

		}

		/* Footer */ {

		}
	} Webpage\End();
?>