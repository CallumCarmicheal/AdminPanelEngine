<?php
	/**
	 * User: Callum Carmicheal
	 * Date: 16/03/2016
	 * Time: 20:39
	 */

	namespace CalPanel\Structure\Input\Button;

	abstract class ButtonType {
		/* BUTTON TYPE */
			const TYPE_BUTTON		= "button";
			const TYPE_SUBMIT		= "submit";

		/* BUTTON STYLES */
			const STYLE_NORMAL		= "";
			const STYLE_FLAT 		= "btn-flat";
			const STYLE_STRIPED 	= "button-striped button-full-striped";

		/* BUTTON DISPLAY */
			const DISPLAY_BUTTON 	= 0;
			const DISPLAY_ICON		= 1;

		/* BUTTON STATES */
			const STATE_ENABLED 	= "";
			const STATE_DISABLED 	= " disabled ";

		/* RIPPLE */
			const RIPPLE_ENABLED	= " btn-ripple ";
			const RIPPLE_DISABLED 	= "";

		/* SIZES */
			const SIZE_XSMALL		= "xs";
			const SIZE_SMALL		= "sm";
			const SIZE_NORMAL		= "default";
			const SIZE_BIG			= "lg";

		/* EXTRA */
			const EXTRA_DROPDOWN	= 0;
	}

	/*
	 * btn
	 * btn-blue
	 *
	 *
	 * btn-default
	 * btn-ripple
	 *
	 */
	function createButton(
		$itmDISP = "", 							$color = "blue",
		$style 	 = ButtonType::STYLE_NORMAL, 	$display = ButtonType::DISPLAY_BUTTON,
		$state = ButtonType::STATE_ENABLED, 	$type  	 = ButtonType::TYPE_BUTTON,
		$size  = ButtonType::SIZE_NORMAL) {
		ob_start();

		?> <button
			type="<?=$type?>"
			class="btn btn-<?=$color?> <?=$style?> <?=$state?> btn-<?=$size?>">
			<?php
				if($display == ButtonType::DISPLAY_ICON)
					echo '<i class="'. $itmDISP. '"></i>';
				else
					echo $itmDISP;
			?>
		</button>

	<?php return ob_get_clean(); }
?>