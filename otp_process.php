<?php 
include("connection.php");
session_start();
include("mailDemo/mailfunction.php");
if(isset($_POST['btnsubmit']))
{
	
	
	
	
	if($_SESSION['otp']==$_POST['txtopt'])
	{
		unset($_SESSION['otp']);
		header("location:newpass.php");
	}
	else
	{
		
		$_SESSION['error']="Enter Valid OTP.....!";
		header("location:otp.php");
	}
}
else
{
	
	header("location:login.php");
}
?>