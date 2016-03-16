<?php
	
	namespace CalPanel\Structure\Input\Textbox;


	function createTextBox($placeHolder) {
		ob_start(); ?>
		
		<!-- Going to experiment with designs -->
		<div class="input-wrapper">
			<input id="user-password" 
				type="password" class="form-control" 
				placeholder="<?=$placeHolder?>">
		</div>
		
	<?php return ob_get_clean(); }
	
	
?>