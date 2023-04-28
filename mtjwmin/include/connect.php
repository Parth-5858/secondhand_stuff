<?php
	ob_clean();
	if (session_status() == PHP_SESSION_NONE) {    
		session_start();
	}
// Create connection
	global $link;
	global $web;
	global $web1;
	
	//$link=mysqli_connect("localhost","vhvdil83_mjw","MJW@@2018","vhvdil83_mjworld");
	$link=mysqli_connect("localhost","root","","vhvdil83_mjworld");
	
	// Check connection// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	/*$mjemail='info@mitaljewels.com';
	$web="http://mtj.world/mtjwmin/";
	$web1="http://mtj.world/";*/
	$mjemail='info@mitaljewels.com';
		$web="http://localhost/mtj.world";
//$web="http://mtj.world/";
	// $web1="http://mtj.world/others/";
		$web1="http://localhost/mtj.world";
	
?>