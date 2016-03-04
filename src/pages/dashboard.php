<?php 
	DEFINE("DIRECTORY_PREPEND", "../", true);

	include(DIRECTORY_PREPEND. "PHPINC.php");
	
	use CalPanel\Structure;
	use CalPanel\Structure\Sidebar;

	IncludeEveryDependancy();
	
	CalPanel\Template\Standard\Start(); {
		/* Header */ {
			echo Structure\Headers\CreateHeader("Dashboard", "Welcome CallumC");
		}
		
		/* Content */ {
			echo Structure\HTML\Content\Animation\Start(); {
				echo Structure\HTML\Content\Animation\CreateAnimatedDiv('Begin the world Dominations... oh wrong chat!');
			} echo Structure\HTML\Content\Animation\End();
		}
		
		/* Footer */ {
			
		}
	} CalPanel\Template\Standard\End();
?>