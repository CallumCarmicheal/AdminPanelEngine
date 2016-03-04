<?php 
	DEFINE("DIRECTORY_PREPEND", "", true);

	include("PHPINC.php");
	
	use CalPanel\Structure;
	use CalPanel\Structure\Sidebar;
	
	function random_lipsum($amount = 1, $what = 'paras', $start = 0) {
		return simplexml_load_file("http://www.lipsum.com/feed/xml?amount=$amount&what=$what&start=$start")->lipsum;
	}
	
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
						for($x = 0; $x < 5; $x++) {
							echo Sidebar\Menu\MenuStart("Test ". $x); {
								echo Sidebar\Menu\AddMenuLabel("Testing Advanced Menu's");
							
								echo Sidebar\Menu\MenuStart("Community"); {
									echo Sidebar\Menu\AddMenuLink("Staff", "");
									echo Sidebar\Menu\AddMenuLink("Rooms", "");
								} echo Sidebar\Menu\MenuEnd();
							
								echo Sidebar\Menu\MenuStart("Server"); {
									echo Sidebar\Menu\AddMenuLink("Consoles/Clients", "");
									echo Sidebar\Menu\AddMenuLink("Tokens", "");
									echo Sidebar\Menu\AddMenuLink("Failed", "");
									echo Sidebar\Menu\AddMenuLink("Bans", "");
								} echo Sidebar\Menu\MenuEnd();
							
								echo Sidebar\Menu\MenuStart("Tickets"); {
									echo Sidebar\Menu\AddMenuLink("Latest", "");
									echo Sidebar\Menu\AddMenuLink("Ongoing", "");
									echo Sidebar\Menu\AddMenuLink("Finished", "");
								} echo Sidebar\Menu\MenuEnd();
							
								echo Sidebar\Menu\MenuStart("Manage"); {
									echo Sidebar\Menu\AddMenuLink("Staff", "");
									echo Sidebar\Menu\AddMenuLink("Server", "");
									echo Sidebar\Menu\AddMenuLink("Console", "");
									echo Sidebar\Menu\AddMenuLink("Panel", "");
								} echo Sidebar\Menu\MenuEnd();
							} echo Sidebar\Menu\MenuEnd();
						}
						
						/*echo Sidebar\Menu\MenuStart("Callum Carmicheal"); {
							echo Sidebar\Menu\AddMenuLink("Visit my Site!", "callumcarmicheal.com");
							echo Sidebar\Menu\AddMenuLabel("Callum, Made this engine!");
						} echo Sidebar\Menu\MenuEnd();*/
					} echo Sidebar\Menu\End();
					
					// Search 	TODO::
					// Account 	TODO::
				} echo Sidebar\Layouts\End();
				
				echo Structure\HTML\Content\Start(); {
					echo Structure\Headers\CreateHeader("Dashboard", "Welcome CallumC");

					echo Structure\HTML\Content\Animation\Start(); {
						echo Structure\HTML\Content\Columns\CreateColumn(8, "md"); {
							echo Structure\HTML\Content\Columns\CreateColumn(8, "md"); {
								echo Structure\Tiles\Standard\Big("Big", random_lipsum(1), "green", 0.34);
							} echo Structure\HTML\Content\Columns\End();

							echo Structure\HTML\Content\Columns\CreateColumn(4, "md"); {
								echo Structure\Tiles\Standard\Medium("Medium", random_lipsum(1), "blue", 0.34);
								echo Structure\Tiles\Standard\Medium("Medium", random_lipsum(1), "red", 0.34);
							} echo Structure\HTML\Content\Columns\End();
							
						} echo Structure\HTML\Content\Columns\End();

						echo Structure\HTML\Content\Columns\CreateColumn(4, "md"); {
							echo Structure\Tiles\Standard\Dynamic_Small_Wide(
									"Dynamic - Small - Wide",
									random_lipsum(1), 
									"green", 0.34);
						} echo Structure\HTML\Content\Columns\End();
					} echo Structure\HTML\Content\Animation\End();
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