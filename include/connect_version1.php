<?php
ob_clean();
// Create connection
	global $link;
	global $web;
	global $web1;
	
	/*$link=mysqli_connect("localhost","vhvdil83_mjw","MJW@@2018","vhvdil83_mjworld");*/
	$link=mysqli_connect("localhost","root","","vhvdil83_mjworld");
	
	// Check connection// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$mjemail='info@mitaljewels.com';
		$web="http://localhost/";
//$web="http://mtj.world/";
	// $web1="http://mtj.world/others/";
		$web1="http://localhost/";
	
	function seo_friendly_url($string){
		$string = str_replace(array('[\', \']'), '', $string);
		$string = preg_replace('/\[.*\]/U', '', $string);
		$string = preg_replace('/&(amp;)?#?[a-z0-9]+;/i', '-', $string);
		$string = htmlentities($string, ENT_COMPAT, 'utf-8');
		$string = preg_replace('/&([a-z])(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig|quot|rsquo);/i', '\\1', $string );
		$string = preg_replace(array('/[^a-z0-9]/i', '/[-]+/') , '-', $string);
		return strtolower(trim($string, '-'));
	}
?>