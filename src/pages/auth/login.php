<?php
	DEFINE("DIRECTORY_PREPEND", "../../", true);

	include(DIRECTORY_PREPEND. "PHPINC.php");
	
	use CalPanel\Structure;
	use CalPanel\Structure\Sidebar;
	use CalPanel\Structure\Input as Input;
	use CalPanel\Template\Standard as Webpage;

	IncludeEveryDependancy();

	Webpage\Start(); {
		/* Header */ {
			echo Structure\Headers\CreateHeader("Login Test", "Login sandbox");
		}
		
		/* Content */ {
			echo Structure\HTML\Content\Animation\Start(); {
				echo Structure\HTML\Content\Rows\Row(); {
					echo Structure\HTML\Content\Columns\CreateColumn(3, "sm"); {

						$html = CalPanel\Structure\HTML\Form\Create("../../modules/login.php"); {
							// Username
							$html .= CalPanel\Structure\Input\Textbox\createTextBox("Username");
							$html .= "<br>";

							// Password
							$html .= CalPanel\Structure\Input\Textbox\createTextBox("Password");

							// Login Button
							$html .= "<br>" . '<div style="float:right;">'; {
								//$html .= CalPanel\Structure\Input\Button\createIconButton_Striped("blue", "fa fa-sign-in");
								$btnStyle = Input\Button\ButtonType::STYLE_FLAT;
								$btnDisplay = Input\Button\ButtonType::DISPLAY_ICON;
								$html .= CalPanel\Structure\Input\Button\createButton( "fa fa-sign-in", "red", $btnStyle, $btnDisplay );
							} $html .= "</div>";
						} $html .= CalPanel\Structure\HTML\Form\End();
						
						echo Structure\Tiles\Standard\Medium("Login", $html, "blue", 0.34);
					} echo Structure\HTML\Content\Columns\End();
				} echo Structure\HTML\Content\Rows\End();
				
				echo Structure\HTML\Content\Rows\Row(); {
					echo Structure\HTML\Content\Columns\CreateColumn(3, "sm"); {
						
						$htmlB = 'To register please click this link ';
						$htmlB .= CalPanel\Structure\Input\Link\createLabel("register.php", "this link to register.");
						
						echo Structure\Tiles\Standard\Dynamic_Small_Wide("Register", $htmlB, "orange", 0.34);
					} echo Structure\HTML\Content\Columns\End();
				} echo Structure\HTML\Content\Rows\End();
				
				//echo Structure\HTML\Content\Columns\CreateColumn(3, "sm"); {
				//	echo Structure\Tiles\Standard\Medium("Register", "", "red", 0.34);
				//} echo Structure\HTML\Content\Columns\End();
			}
		}
		
		/* Footer */ {
			
		}
	} Webpage\End();
?>