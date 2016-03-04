<?php

	namespace CalPanel\Structure\Tiles\Standard;

	function CreateDiv($htmlHeader, $htmlContent, $Attributes, $BodyAttributes="", $Delay = 0.34) {
		$useBodyAttr = false;
		if(!empty($BodyAttributes)) if (!ctype_space($BodyAttributes))
			$useBodyAttr = true;
		
			
		$buffer = "";
		$buffer .= '<div class="'. $Attributes. '" style="animation-delay: '. $Delay. 's;">';
		$buffer .= '<div class="card-body">'; {
			//$buffer .= $htmlHeader. $htmlContent;
			
			$buffer .= $htmlHeader;
			if($useBodyAttr) $buffer .= '<div class='. $BodyAttributes. '>';
				$buffer .= $htmlContent;
			if($useBodyAttr) $buffer .= '</div>';
			
			// UNCOMMENT TO DEBUG THE BODY ATTRIBUTES
			/* $buffer .= "<br><br><pre>"; {
				$buffer .= "Body Attributes: $BodyAttributes <br>";
				$buffer .= "Use Body Attributes: $useBodyAttr <br>";
			} $buffer .= "</pre>"; */
			
		} $buffer .= '</div></div>';
		
		return $buffer;
	}
	
	function CreateHeader($text, $type = "md") {
		if(empty($text)) 
			$text = "SuicideSheep <3";
		
		if (ctype_space($text)) 
			$text = "I LIKE TRAINS";
		
		$buffer = '<div class="CalPanel-Cards-Header-'. $type. '">';
		$buffer .= $text;
		$buffer .= '</div>';
		return $buffer;
	}
	
	function CreateBody($size) {
		return "CalPanel-Cards-Body-". $size;
	}

	function Big($Header = "", $htmlContent = "", $Color = "green", $Delay = 0.34) {
		$Attributes = "card tile card-". $Color. " card-weather material-animate material-animated";
		
		return CreateDiv(CreateHeader($Header, "bg"), $htmlContent, $Attributes, CreateBody("bg"), $Delay);
	}
	
	function Medium($Header = "",$htmlContent = "", $Color = "green", $Delay = 0.34) {
		$Attributes = "card tile card-". $Color. " card-dashboard-graph material-animate material-animated";
		
		return CreateDiv(CreateHeader($Header, "md"),$htmlContent, $Attributes, CreateBody("md"), $Delay);
	}
	
	function Dynamic_Small_Wide($Header = "", $htmlContent = "", $Color = "green", $Delay = 0.34) {
		$Attributes = "card tile card-". $Color. " card-small material-animate material-animated";
		
		return CreateDiv(CreateHeader($Header, "sm"), $htmlContent, $Attributes, CreateBody("sm"), $Delay);
	}
?>