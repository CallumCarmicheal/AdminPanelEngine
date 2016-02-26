<?php
	
	namespace CalPanel\Structure\HTML\Headers;	

	function Start() {
		echo "<head>";
	}
	
	function End() {
		return ("</head>");
	}
	
	// Yes its messy but it makes it easier for RAD, will make a propper Website generation later
	// Its mostly to get the maintemplate generated!
	function AddDefaultHeaders($pageTitle = "CalPanel", $pageDescription = "Soooooooonnnnne My friends..... SOOOOOON!") {
		ob_start(); ?>
			
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
			<title><?=$pageTitle?></title>
		
			<meta name="description" content="<?= $pageDescription ?>">
			<meta name="author" content="Teamfox for the Theme, Callum Carmicheal for the Engine">
		
			<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
			<meta name="apple-mobile-web-app-capable" content="yes">
			<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
			<meta name="apple-touch-fullscreen" content="yes">
		
			<!-- BEGIN CORE CSS -->
			<link rel="stylesheet" href="assets/admin1/css/admin1.css">
			<link rel="stylesheet" href="assets/globals/css/elements.css">
			<!-- END CORE CSS -->
		
			<!-- BEGIN PLUGINS CSS -->
			<link rel="stylesheet" href="assets/globals/plugins/rickshaw/rickshaw.min.css">
			<link rel="stylesheet" href="assets/globals/plugins/bxslider/jquery.bxslider.css">
		
			<link rel="stylesheet" href="assets/globals/css/plugins.css">
			<!-- END PLUGINS CSS -->
		
			<!-- BEGIN SHORTCUT AND TOUCH ICONS -->
			<link rel="shortcut icon" href="assets/globals/img/icons/favicon.ico">
			<link rel="apple-touch-icon" href="assets/globals/img/icons/apple-touch-icon.png">
			<!-- END SHORTCUT AND TOUCH ICONS -->
		
			<script src="assets/globals/plugins/modernizr/modernizr.min.js"></script>
		
	<?php return ob_get_clean(); }
	
	/*class Headers {
		
		private $CSSFiles 	= array();
		private $MetaTags 	= array();
		private $JSFiles 	= array();
		private $Other 		= array();
		
		
		function __construct() {
			// Setup our base GUI Requirements
			
			array_push($this->MetaTags,
					array("charset", "utf-8"),
					array("http-equiv", "X-UA-Compatible", "IE=edge"),
					array("name", "description", "Pleasure is responsive, material admin dashboard panel"),
					array("name", "author", ""),
					array("name", "viewport", ""),
					array("name", "apple-mobile-web-app-capable", "")
			);
			
			
			array_push($this->$CSSFiles, 
					"assets/admin1/css/admin1.css",
					"assets/globals/css/elements.css",
					"assets/globals/plugins/rickshaw/rickshaw.min.css",
					"assets/globals/plugins/bxslider/jquery.bxslider.css",
					"assets/globals/css/plugins.css"
			);
		}
	}*/
	
	
?>