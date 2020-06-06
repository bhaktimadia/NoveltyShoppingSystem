<?php 
include_once("connection.php");
if(isset($_GET['pid']))
{
	unset($_SESSION['cart']);
	header("location:display_cart.php");
}
?>