<?php
include("include/connect.php");

$id=$_SESSION['vhvadmin_id'];

if(isset($_SESSION['vhvadmin_id']))
{
session_unset(); 
session_destroy();
header('location:index.php');
}
else
header('location:index.php');
?>