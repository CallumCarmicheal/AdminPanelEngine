<?php
	
	namespace CalPanel\Structure\Input\ButtonOLD;


	function createFlatButton($col, $text, $size="default", $ripple = true, $type="button") {
		ob_start(); 
		
		$css_Ripple = "";
		
		if($ripple)
			$css_Ripple = "btn-ripple";
		?> <button type="<?=$type?>" class="btn btn-<?=$size?> btn-flat btn-<?=$col?> <?=$css_Ripple?>"><?=$text?></button>
	<?php return ob_get_clean(); }
	
	function createFlatButton_Disabled($col, $text, $size="default", $ripple = true, $type="button") {
		ob_start();
	
		$css_Ripple = "";
	
		if($ripple)
			$css_Ripple = "btn-ripple";
		?> <button type="<?=$type?>" class="btn disabled btn-<?=$size?> btn-flat btn-<?=$col?> <?=$css_Ripple?>"><?=$text?></button>
	<?php return ob_get_clean(); }
	
	function createButton($col, $text, $size="default", $ripple = true, $type="button") {
		ob_start();
	
		$css_Ripple = "";
		if($ripple)
			$css_Ripple = "btn-ripple";
		?> <button type="<?=$type?>" class="btn btn-<?=$size?> btn-<?=$col?> <?=$css_Ripple?>"><?=$text?></button>
	<?php return ob_get_clean(); }
	
	function createButton_Disabled($col, $text, $size="default", $ripple = true, $type="button") {
		ob_start();
	
		$css_Ripple = "";
		if($ripple)
			$css_Ripple = "btn-ripple";
		?> <button type="<?=$type?>" class="btn disabled btn-<?=$size?> btn-<?=$col?> <?=$css_Ripple?>"><?=$text?></button>
	<?php return ob_get_clean(); }
	
	function createStripedButton($col, $text, $size="default", $ripple = true, $type="button") {
		ob_start();
	
		$css_Ripple = "";
		if($ripple)
			$css_Ripple = "btn-ripple";
		?> <button type="<?=$type?>" class="btn button-striped button-full-striped btn-<?=$size?> btn-<?=$col?> <?=$css_Ripple?>"><?=$text?></button>
	<?php return ob_get_clean(); }
	
	function createStripedButton_Disabled($col, $text, $size="default", $ripple = true, $type="button") {
		ob_start();
	
		$css_Ripple = "";
		if($ripple)
			$css_Ripple = "btn-ripple";
		?> <button type="<?=$type?>" class="btn disabled button-striped button-full-striped btn-<?=$size?> btn-<?=$col?> <?=$css_Ripple?>"><?=$text?></button>
	<?php return ob_get_clean(); }

	function createIconButton($col, $icon, $size="default", $ripple = true, $type="button") {
		ob_start();
		$css_Ripple = "";
		if($ripple)
			$css_Ripple = "btn-ripple";
		?> 
		
		<button 
			type="<?=$type?>"
			class="btn btn-<?=$size?> btn-<?=$col?> <?=$css_Ripple?>">
			<i class="<?=$icon?>"></i>
		</button>
	
	<?php return ob_get_clean(); }
	
	function createIconButton_Disabled($col, $icon, $size="default", $ripple = true, $type="button") {
		ob_start();
		$css_Ripple = "";
		if($ripple)
			$css_Ripple = "btn-ripple";
		?>
			
			<button 
				type="<?=$type?>"
				class="btn disabled btn-<?=$size?> btn-<?=$col?> <?=$css_Ripple?>">
				<i class="<?=$icon?>"></i>
			</button>
		
	<?php return ob_get_clean(); }

	function createIconButton_Striped($col, $icon, $size="default", $ripple = true, $type="button") {
		ob_start();
		$css_Ripple = "";
		if($ripple)
			$css_Ripple = "btn-ripple";
		?>
			
			<button 
				type="<?=$type?>" 
				class="btn button-striped button-full-striped btn-<?=$size?> btn-<?=$col?> <?=$css_Ripple?>">
				<i class="<?=$icon?>"></i>
			</button>
		
	<?php return ob_get_clean(); }
	
	function createIconButton_Striped_Disabled($col, $icon, $size="default", $ripple = true, $type="button") {
		ob_start();
		$css_Ripple = "";
		if($ripple)
			$css_Ripple = "btn-ripple";
		?>
				
				<button 
					type="<?=$type?>" 
					class="btn button-striped button-full-striped btn-<?=$size?> btn-<?=$col?> <?=$css_Ripple?>">
					<i class="<?=$icon?>"></i>
				</button>
			
	<?php return ob_get_clean(); }
?>