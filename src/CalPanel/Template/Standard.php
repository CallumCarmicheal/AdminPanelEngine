<?php
	namespace CalPanel\Template\Standard;
	
	// Face palm
	use CalPanel\Structure;
	use CalPanel\Structure\Sidebar;
	
	function Start() {
		$baseFolder = "";
		if(defined("DIRECTORY_PREPEND"))
			$baseFolder = DIRECTORY_PREPEND;
		
		echo Structure\HTML\Base\Start(); {
			/* Render the Header */
			echo Structure\HTML\Headers\Start(); {
				echo Structure\HTML\Headers\AddDefaultHeaders($baseFolder);
			} echo Structure\HTML\Headers\End();
		
		
			/* Render the Body */ 
			echo Structure\HTML\Body\Start(); {
				// Create our Sidebar
				echo Sidebar\CreateSideBar($baseFolder. "assets/calpanel/img/user/DefaultImage.jpg");  
				
				echo Sidebar\Layouts\Start(); {
					// Menu List
					echo Sidebar\Menu\Start(); {
						echo SideBar\Menu\AddMenuLink("Dashboard", "pages/dashboard.php");
						
						echo Sidebar\Menu\MenuStart("Authentication"); {
							echo Sidebar\Menu\AddMenuLink("Dashboard", 		"pages/auth/index.php");
							echo Sidebar\Menu\AddMenuLink("Registration", 	"pages/auth/registration.php");
							echo Sidebar\Menu\AddMenuLink("Login", 			"pages/auth/login.php");
						} echo Sidebar\Menu\MenuEnd();
						
						
						echo SideBar\Menu\AddMenuLink("Lockscreen", "pages/lockscreen.php");
						
						echo Sidebar\Menu\MenuStart("Tiles"); {
							echo Sidebar\Menu\AddMenuLink("Standard", "pages/tiles/standard.php");
							echo Sidebar\Menu\AddMenuLink("Music", 	  "");
							echo Sidebar\Menu\AddMenuLink("Images",   "");
						} echo Sidebar\Menu\MenuEnd();

					} echo Sidebar\Menu\End();
					
					// Search 	TODO::
					// Account 	TODO::
				} echo Sidebar\Layouts\End();
					
				echo Structure\HTML\Content\Start();
			} /* Structure\HTML\Body\End() */
		} /* Structure\HTML\Base\End() */
	}
	
	function End() {
		$baseFolder = "";
		if(defined("DIRECTORY_PREPEND"))
			$baseFolder = DIRECTORY_PREPEND;
		
		/* Structure\HTML\Base\Start() */ {
			/* Structure\HTML\Body\Start() */ {
				/* Structure\HTML\Content\Start() */ {
				} echo Structure\HTML\Content\End();
				
				// Now here we Add our Current Page Items
				// Note may split this into 2 files So There is only
				// 2 Functions to call and Files are not cluttered
				
				// Now append the Javascript to the end of the BODY
				echo Structure\HTML\Javascript\Scripts($baseFolder);
			} echo Structure\HTML\Body\End();
		} echo Structure\HTML\Base\End();
	}

?>