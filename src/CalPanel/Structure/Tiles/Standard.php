<?php

	function CreateTile($htmlContent, $Attributes, $Delay = 0.34) {
		$buffer = "";
		$buffer .= '<div class="'. $Attributes. '" style="animation-delay: '. $Delay. 's;">';
		$buffer .= '<div class="card-body">';
		$buffer .= $htmlContent;
		$buffer .= '</div></div>';
		
		return $buffer;
	}

	function Basic($htmlContent, $Delay = 0.34) {
		$Attributes = "card tile card-green card-weather bg-image sample-bg-image15 material-animate material-animated";
	
		CreateTile($htmlContent, $Attributes, $Delay);
	}
?>