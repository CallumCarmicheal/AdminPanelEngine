<?php

	namespace CalPanel\Structure\Sidebar\Menu;

	
	function Start() {
		echo '<!-- BEGIN MENU LAYER --> <div class="menu-layer"> <ul>';
	}
	
	function End() {
		echo '</div><!--.menu-layer--> <!-- END OF MENU LAYER -->';
	}
	
	
	function AddMenuLabel($Text) {
		$format = '<li><a>%s</a></li>';
		$menuItem  = sprintf($format, $Text);
		echo $menuItem;
	}
	
	/**
	 * Used for Single, Not Items with Sub Menu(s)
	 */
	function AddMenuLink($Name, $Link) {
		$urlFormat = '<li> <a href="%s">%s</a> </li>';
		$menuItem  = sprintf($urlFormat, $Link, $Name);
		echo $menuItem;
	}
	
	
	function MenuStart($Name) {
		$format = '<li> <a href="javascript:;">%s</a> <ul class="child-menu"> ';
		$menuItem = sprintf($format, $Name);
		echo $menuItem;
	}
	
	function MenuEnd() {
		echo '</ul> </li>';
	}
	
?>