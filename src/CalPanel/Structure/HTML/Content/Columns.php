<?php
	namespace CalPanel\Structure\HTML\Content\Columns;
	
	// XS = PHONES, SMALL TABLETS
	// SM = SMALL (Low end monitors), Tablets
	// MD = Most computer resolutions
	function CreateColumn($Size = 8, $Device = "md") {
		$buffer = '<div class="col-';
		$buffer .= $Device;
		$buffer .= '-';
		$buffer .= $Size;
		$buffer .= '">';
		
		return $buffer;
	}
	
	function End() {
		return ('</div>');
	}
?>