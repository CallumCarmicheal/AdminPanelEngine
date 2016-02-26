<?php
	
	namespace CalPanel\Structure\HTML\Base;
	
	function Start() { ob_start(); ?>
			<!DOCTYPE html>
			<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
			<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
			<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
			<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<?php return ob_get_clean(); }
	
	function End() { 
		return "</html>";
	}
?>