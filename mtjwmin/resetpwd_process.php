<?php

include("include/connect.php");

$id=$_SESSION['vhvadmin_id'];

if(isset($_REQUEST['cpassword'])){
	$cpassword=$_REQUEST['cpassword'];
}
else{
	$cpassword='';
}

if(isset($_REQUEST['npassword'])){
	$npassword=$_REQUEST['npassword'];
}
else{
	$npassword='';
}

if(isset($_REQUEST['cnpassword'])){
	$cnpassword=$_REQUEST['cnpassword'];
}
else{
	$cnpassword='';
}
	
		$query="update admin set `password`='".md5($cnpassword)."' where id='".$id."'"; 
		$result=mysqli_query($link,$query);	
		if($result){
			echo "1";
		}
		else{
			echo "2";
		}

				
				
?>