<?php
	namespace CalPanel\Structure\Input\Link;
	// YES LINK FROM LEGEND OF ZELDA... What else would it be?

	use \CalPanel\Structure\Input\Button as btn;
	
	function createButton($location, $text, $col) {
		/*
		 * $display  = "", 							$color = "blue",
		 * $style 	 = ButtonType::STYLE_NORMAL, 	$state = ButtonType::STATE_ENABLED,
		 * $type  	 = ButtonType::TYPE_BUTTON, 	$size  = ButtonType::SIZE_NORMAL
		 */
		$linkHTML = btn\createButton(
			$text,
			$col,
			btn\ButtonType::STYLE_FLAT,
			btn\ButtonType::STATE_ENABLED,
			btn\ButtonType::TYPE_SUBMIT,
			btn\ButtonType::SIZE_NORMAL);

		$buffer = "";
		$buffer .= '<form action="';
		  $buffer .= $location;
		  $buffer .= '" method="get">';
			$buffer .= $linkHTML;
		$buffer .= '</form>';
		
		return $buffer;
	}
	
	function createLabel($location, $text) {
		// A HREF DID NOT WORK BEFORE...
		$buffer = "";
		$buffer .= '<a href="';
			$buffer .= $location;
			$buffer .= '">';
				$buffer .= $text;
		$buffer .= "</a>";
		
		return $buffer;
	}
?>