<?php
	
	namespace CalPanel\Structure\Sidebar;
	
	function Start() {
		
	}
	
	
	
	function CreateSideBar($sideBarName = "CalPanel") {
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
					<img src="assets/calpanel/img/user/DefaultImage.jpg" alt="">
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
		
		<?php 
	}
	
	
?>