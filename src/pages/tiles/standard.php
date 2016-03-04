<?php
	DEFINE("DIRECTORY_PREPEND", "../../", true);

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
				echo Structure\HTML\Content\Columns\CreateColumn(8, "md"); {
					echo Structure\HTML\Content\Columns\CreateColumn(8, "md"); {
						echo Structure\Tiles\Standard\Big("Big", LoremIpsum_RND(1), "green", 0.34);
					} echo Structure\HTML\Content\Columns\End();
			
					echo Structure\HTML\Content\Columns\CreateColumn(4, "md"); {
						echo Structure\Tiles\Standard\Medium("Medium", LoremIpsum_RND(1), "blue", 0.34);
						echo Structure\Tiles\Standard\Medium("Medium", LoremIpsum_RND(1), "red", 0.34);
					} echo Structure\HTML\Content\Columns\End();
						
				} echo Structure\HTML\Content\Columns\End();
			
				echo Structure\HTML\Content\Columns\CreateColumn(4, "md"); {
					echo Structure\Tiles\Standard\Dynamic_Small_Wide(
							"Dynamic - Small - Wide",
							LoremIpsum_RND(3),
							"green", 0.34);
				} echo Structure\HTML\Content\Columns\End();
			} echo Structure\HTML\Content\Animation\End();
		}
		
		/* Footer */ {
			// HAHAHA NOPE, maybe later ;)
		}
	} CalPanel\Template\Standard\End();
?>