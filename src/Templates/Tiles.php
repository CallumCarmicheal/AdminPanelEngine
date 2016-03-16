<?php
	DEFINE("DIRECTORY_PREPEND", "../", true);

	include(DIRECTORY_PREPEND. "PHPINC.php");


	use CalPanel\Structure;

	use CalPanel\Structure\HTML\Content as HTML;
	use CalPanel\Structure\Headers 		as Headers;
	use CalPanel\Template\Standard 		as Webpage;

	IncludeEveryDependancy();

	Webpage\Start(); {
		/* Header */ {
			echo Headers\CreateHeader("Dashboard", "Welcome CallumC");
		}

		/* Content */ {
			echo HTML\Animation\Start(); {
				echo HTML\Columns\CreateColumn(8, "md"); {
					echo HTML\Columns\CreateColumn(8, "md"); {
						echo Structure\Tiles\Standard\Big("Big", LoremIpsum_RND(1), "green", 0.34);
					} echo HTML\Columns\End();

					echo HTML\Columns\CreateColumn(4, "md"); {
						echo Structure\Tiles\Standard\Medium("Medium", LoremIpsum_RND(1), "blue", 0.34);
						echo Structure\Tiles\Standard\Medium("Medium", LoremIpsum_RND(1), "red", 0.34);
					} echo HTML\Columns\End();

				} echo HTML\Columns\End();

				echo HTML\Columns\CreateColumn(4, "md"); {
					echo Structure\Tiles\Standard\Dynamic_Small_Wide(
						"Dynamic - Small - Wide",
						LoremIpsum_RND(3),
						"green", 0.34);
				} echo HTML\Columns\End();
			} echo HTML\Animation\End();
		}

		/* Footer */ {

		}
	} Webpage\End();
?>