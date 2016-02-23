<?php 
	include("PHPINC.php");
	
	use CalPanel\Structure;
	use CalPanel\Structure\Sidebar;
	
	
	IncludeEveryDependancy();
	
	Structure\Base\Start(); {
		
		/* Render the Header */ {
			Structure\Headers\Start(); {
				Structure\Headers\AddDefaultHeaders();
			} Structure\Headers\End();
		}
		
		/* Render the Body */ {
			Structure\Body\Start(); {
				// Create our Sidebar
				Sidebar\CreateSideBar();  
				
				Sidebar\Layouts\Start(); {
					// Menu List
					Sidebar\Menu\Start(); {
						
						// Shameless Promotion ;-;
						Sidebar\Menu\MenuStart("Callum Carmicheal"); {
							Sidebar\Menu\AddMenuLink("Visit my Site!", "callumcarmicheal.com");
							Sidebar\Menu\AddMenuLabel("Callum, Made this engine!");
						} Sidebar\Menu\MenuEnd();
						
						
						
						Sidebar\Menu\AddMenuLink("HelloWorld!", "example.com");
					} Sidebar\Menu\End();
					
					// Search 	TODO::
					
					
					// Account 	TODO::
					
				} Sidebar\Layouts\End();
				
				// Now here we Add our Current Page Items
				// Note may split this into 2 files So There is only
				// 2 Functions to call and Files are not cluttered
				
				
				// Now append the Javascript to the end of the BODY
				Structure\Javascript\Scripts();
			} Structure\Body\End();
		}
		
	} Structure\Base\End();
?>