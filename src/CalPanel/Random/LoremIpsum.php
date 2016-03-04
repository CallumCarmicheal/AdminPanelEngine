<?php
	
	function LoremIpsum_RND($amount = 1, $what = 'paras', $start = 0) {
		return simplexml_load_file("http://www.lipsum.com/feed/xml?amount=$amount&what=$what&start=$start")->lipsum;
	}


?>