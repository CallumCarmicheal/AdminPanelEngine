<?php
	
	namespace CalPanel\Structure\HTML\Javascript;
	
	function Scripts() {
		ob_start(); ?>
		
		<!-- BEGIN GLOBAL AND THEME VENDORS -->
			<script src="assets/globals/js/global-vendors.js"></script>
		<!-- END GLOBAL AND THEME VENDORS -->
	
		<!-- BEGIN PLUGINS AREA -->
			<script src="http://maps.google.com/maps/api/js?sensor=true&amp;libraries=places"></script>
			<script src="assets/globals/plugins/gmaps/gmaps.js"></script>
			<script src="assets/globals/plugins/bxslider/jquery.bxslider.min.js"></script>
			<script src="assets/globals/plugins/audiojs/audiojs/audio.min.js"></script>
			<script src="assets/globals/plugins/d3/d3.min.js"></script>
			<script src="assets/globals/plugins/rickshaw/rickshaw.min.js"></script>
			<script src="assets/globals/plugins/jquery-knob/excanvas.js"></script>
			<script src="assets/globals/plugins/jquery-knob/dist/jquery.knob.min.js"></script>
			<script src="assets/globals/plugins/gauge/gauge.min.js"></script>
		<!-- END PLUGINS AREA -->
	
		<!-- PLEASURE ( ͡° ͜ʖ ͡° ) -->
			<script src="assets/globals/js/pleasure.js"></script>
		<!-- END PLEASURE ;-; -->
			
		<!-- ADMIN 1 -->
			<script src="assets/admin1/js/layout.js"></script>
		
			<script src="assets/globals/scripts/sliders.js"></script>
			<script src="assets/globals/scripts/maps-google.js"></script>
			<script src="assets/globals/scripts/widget-audio.js"></script>
			<script src="assets/globals/scripts/charts-knob.js"></script>
			<script src="assets/globals/scripts/index.js"></script>
		<!-- BEGIN INITIALIZATION-->
			<script>
				$(document).ready(function () {
					Pleasure.init();
					Layout.init();
			
					Index.init();
					WidgetAudio.single();
					ChartsKnob.init();
			
				});
			</script>
		<!-- END INITIALIZATION-->
	<?php return ob_get_clean(); }

?>