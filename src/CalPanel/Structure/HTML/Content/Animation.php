<?php
	
	namespace CalPanel\Structure\HTML\Content\Animation;
	
	function Start() {
		return ('<div class="display-animation"><div class="row image-row">');
	}
	
	function End() {
		return ('</div></div>');
	}

	function CreateAnimatedDiv($html = "",  $delay = 0.34, $id = "") {
		return CreateAnimatedStyle("", $html, $delay, $id);
	}
	
	
	function CreateAnimatedStyle($CSS, $html = "",  $delay = 0.34, $id = "") {
		$buffer = "";
		$buffer .= '<div ';
		
		if(!empty($CSS)) if (!ctype_space($CSS)) 
			$buffer .= 'style="'. $CSS. '" ';
		
		if(!empty($id)) if (!ctype_space($id)) {
			$buffer .= 'id="'; $buffer .= $id;
			$buffer .= '" ';
		}
			
		$buffer .= 'class="material-animate material-animated" style="animation-delay: ';
		$buffer .= $delay;
		$buffer .= 's;">';
	
		$buffer .= $html;
		
		$buffer .= '</div>';
	
		return $buffer;
	}
?>