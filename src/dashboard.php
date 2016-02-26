<?php 
	include("PHPINC.php");
	
	use CalPanel\Structure;
	use CalPanel\Structure\Sidebar;
	
	
	IncludeEveryDependancy();
	
	echo Structure\HTML\Base\Start(); {
		
		/* Render the Header */ {
			echo Structure\HTML\Headers\Start(); {
				echo Structure\HTML\Headers\AddDefaultHeaders();
			} echo Structure\HTML\Headers\End();
		}
		
		/* Render the Body */ {
			echo Structure\HTML\Body\Start(); {
				// Create our Sidebar
				echo Sidebar\CreateSideBar();  
				
				echo Sidebar\Layouts\Start(); {
					// Menu List
					echo Sidebar\Menu\Start(); {
						
						// Shameless Promotion ;-;
						echo Sidebar\Menu\MenuStart("Callum Carmicheal"); {
							echo Sidebar\Menu\AddMenuLink("Visit my Site!", "callumcarmicheal.com");
							echo Sidebar\Menu\AddMenuLabel("Callum, Made this engine!");
						} echo Sidebar\Menu\MenuEnd();
						
						
						
						echo Sidebar\Menu\AddMenuLink("HelloWorld!", "example.com");
					} echo Sidebar\Menu\End();
					
					// Search 	TODO::
					
					
					// Account 	TODO::
					
				} echo Sidebar\Layouts\End();
				
				echo Structure\HTML\Content\Start(); {
					echo Structure\Headers\CreateHeader("Dashboard", "Welcome {{Account.User.Name}}");
					
					
				} echo Structure\HTML\Content\End();
				
				
				// Now here we Add our Current Page Items
				// Note may split this into 2 files So There is only
				// 2 Functions to call and Files are not cluttered
				
				// Now append the Javascript to the end of the BODY
				echo Structure\HTML\Javascript\Scripts();
			} echo Structure\HTML\Body\End();
		}
		
	} echo Structure\HTML\Base\End();
?>