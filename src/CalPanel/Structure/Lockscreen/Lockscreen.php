<?php
	
	namespace CalPanel\Structure\Lockscreen\Lockscreen;

	function SetupScripts($BaseDirectory = "") {	
		ob_start(); ?>
		
			<!-- BEGIN GLOBAL AND THEME VENDORS -->
				<script src="<?=$BaseDirectory?>assets/globals/js/global-vendors.js"></script>
			<!-- END GLOBAL AND THEME VENDORS -->
		
			<!-- BEGIN PLUGINS AREA -->
			<!-- END PLUGINS AREA -->
		
			<!-- PLUGINS INITIALIZATION AND SETTINGS -->
				<script src="<?=$BaseDirectory?>assets/globals/scripts/user-pages.js"></script>
			<!-- END PLUGINS INITIALIZATION AND SETTINGS -->
		
			<!-- PLEASURE Initializer -->
				<script src="<?=$BaseDirectory?>assets/globals/js/pleasure.js"></script>
			<!-- ADMIN 1 Layout Functions -->
				<script src="<?=$BaseDirectory?>assets/admin1/js/layout.js"></script>
		
			<!-- BEGIN INITIALIZATION-->
				<script>
				$(document).ready(function () {
					Pleasure.init();
					Layout.init();
					UserPages.lockScreen();
				});
			</script>
			<!-- END INITIALIZATION-->
		
			<!-- BEGIN Google Analytics -->
			<!-- END Google Analytics -->
		
	<?php return ob_get_clean(); }
	
	function CreateLockscreen(
		$PostURL,	$Name,
		$UserImage, $BackgroundImage
	) {
		$baseFolder = "";
		if(defined("DIRECTORY_PREPEND"))
			$baseFolder = DIRECTORY_PREPEND;		

		$buffer = "";
		$buffer .= '';
		
		$buffer .= '<body class="bg-lock-screen layout-tablet">'; {
			$buffer .= '<div class="lock-screen">'; {			

				$buffer .= '<div class="user-profile">'; {
					$buffer .= '<img src="'. $UserImage. '" alt="User-Image">';
					$buffer .= '<p>';
						$buffer .= $Name;
					$buffer .= '</p>';
				} $buffer .= '</div>';
				
				$buffer .= GetLoginTextbox();
			} $buffer .= '</div>';
			
			$buffer .= GetTheRest($BackgroundImage);
			$buffer .= SetupScripts($baseFolder);
		} $buffer .= '</body>';

		return $buffer;
	}
	
	
	// Save time of creating the buffer
	function GetLoginTextbox() {
		ob_start(); ?>
		
		<div class="form-buttons clearfix">
			<div class="form-group pull-left">
				<div class="inputer">
					<div class="input-wrapper">
						<input id="user-password" type="password" class="form-control" placeholder="Enter Password">
					</div>
				</div>
			</div><!--.form-group-->
			<div class="form-group pull-left">
				<button type="submit" class="btn btn-flat"><i class="fa fa-arrow-circle-right"></i></button>
			</div><!--.form-group-->
		</div><!--.form-buttons-->
		
	<?php return ob_get_clean(); }

	// Everything here is static so also skip the buffer
	function GetTheRest($backgroundImage) {
		ob_start();
 	?>
 		
 		<style>
 			.bg-lock-screen .bg-blur:before {
			    background-size: cover;
			    background: url("<?=$backgroundImage?>");
			    margin: -10px -20px -20px -10px;
			}
 		</style>
 	
 		<div class="bg-blur dark">
 			<div style=""> </div>
			<div class="overlay"></div><!--.overlay-->
		</div><!--.bg-blur-->
	
		<svg version="1.1" xmlns='http://www.w3.org/2000/svg'>
			<filter id='blur'>
				<feGaussianBlur stdDeviation='7' />
			</filter>
		</svg>
 	
 	<?php return ob_get_clean(); }
?>