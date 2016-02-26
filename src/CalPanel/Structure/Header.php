<?php

	namespace CalPanel\Structure\Headers;
	
	
	// TODO, CREATE BREADCRUMBS!
	function CreateHeader($Title, $subTitle, $breadCrumbs = "") {
		
		$htmlBuffer = "";
		$headerType = "full-content";
		
		$htmlBuffer .= '<div class="page-header '. $headerType. '">';
		$htmlBuffer .= '<div class="row"><div class="col-sm-6"><h1>';
		$htmlBuffer .= $Title;
		$htmlBuffer .= ' <small>';
		$htmlBuffer .= $subTitle;
		$htmlBuffer .= '</small></h1></div></div></div>';

		return $htmlBuffer;
	}
	
	
	
?>