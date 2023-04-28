<?php
include("include/connect.php");

$id=$_REQUEST['order_id'];

//query execute

$query = mysqli_query($link,"update iwb_orders set order_status='accepted' where order_id =".$id);
if($query){
	echo "1";
}else{
	echo "0";
}
?>