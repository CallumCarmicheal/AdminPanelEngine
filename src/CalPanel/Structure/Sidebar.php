<?php
	
	namespace CalPanel\Structure\Sidebar;
	
	function CreateSideBar($imageLocation = "assets/calpanel/img/user/DefaultImage.jpg", $sideBarName = "CalPanel") {
		ob_start(); 
		
		
		
		?>
		
		<div class="nav-bar-container">
			<div class="nav-menu">
				<div class="hamburger">
					<span class="patty"></span>
					<span class="patty"></span>
					<span class="patty"></span>
					<span class="patty"></span>
					<span class="patty"></span>
					<span class="patty"></span>
				</div><!--.hamburger-->
			</div><!--.nav-menu-->
	
			<div class="nav-search">
				<span class="search"></span>
			</div><!--.nav-search-->
	
			<div class="nav-user">
				<div class="user">
					<img src="<?=$imageLocation?>" alt="">
					<span class="badge">3</span>
				</div>
				<div class="cross">
					<span class="line"></span>
					<span class="line"></span>
				</div>
			</div>

			<div class="nav-bar-border"></div>
	
			<div class="overlay">
				<div class="starting-point">
					<span></span>
				</div>
				<div class="logo"><?=$sideBarName?></div>
			</div>
	
			<div class="overlay-secondary"></div>
	
		</div>
		
	<?php return ob_get_clean(); }
	
	
?>