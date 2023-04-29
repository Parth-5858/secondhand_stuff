<?php
	ob_clean();
	if (session_status() == PHP_SESSION_NONE) {    
		session_start();
	}
// Create connection
	global $link;
	global $web;
	global $web1;
	
	$link=mysqli_connect("localhost","root","","vhvdil83_mjworld");
	
	// Check connection// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
		$web="http://localhost/secondhand_shop";
		$web1="http://localhost/secondhand_shop";
	
?>
