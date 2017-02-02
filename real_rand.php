<?php
	// Make By K22pr - 2017-02-02
	// https://github.com/k22pr/PHPx-String2Mix

	//PHP Real Random
	function real_rand($min,$max){
		if($min >= $max) return 0;
		else if(!function_exists("openssl_random_pseudo_bytes")) exit("<b>not support openssl_random_pseudo_bytes()</b>");
		else{
			$range = $max - $min;
			$len = (int) log($range,2)/8+1;
			$dec = hexdec(bin2hex(openssl_random_pseudo_bytes($len)))%($range+1);
			return $min+$dec;
		}
	}
?>