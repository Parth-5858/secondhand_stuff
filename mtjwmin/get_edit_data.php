<?php
include("include/connect.php");
$id=$_REQUEST['edit'];
//query execute

$query = mysqli_query($link,"select * from products where pid =".$id);
echo json_encode(mysqli_fetch_assoc($query));
?>