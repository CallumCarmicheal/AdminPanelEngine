<?php

	namespace CalPanel\Structure\Sidebar\Menu;

	
	function Start() {
		return '<!-- BEGIN MENU LAYER --> <div class="menu-layer"> <ul>';
	}
	
	function End() {
		return '</div><!--.menu-layer--> <!-- END OF MENU LAYER -->';
	}
	
	
	function AddMenuLabel($Text) {
		$format = '<li><a>%s</a></li>';
		$menuItem  = sprintf($format, $Text);
		return $menuItem;
	}
	
	/**
	 * Used for Single, Not Items with Sub Menu(s)
	 */
	function AddMenuLink($Name, $Link) {
		$urlFormat = '<li> <a href="%s">%s</a> </li>';
		$menuItem  = sprintf($urlFormat, $Link, $Name);
		return $menuItem;
	}
	
	
	function MenuStart($Name) {
		$format = '<li> <a href="javascript:;">%s</a> <ul class="child-menu"> ';
		$menuItem = sprintf($format, $Name);
		return $menuItem;
	}
	
	function MenuEnd() {
		return '</ul> </li>';
	}
	
?>