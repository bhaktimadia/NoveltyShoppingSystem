<?php 
include("connection.php");


if(isset($_POST['btnsubmit']))
{
	$email=$_SESSION['email'];
	
	$pass=$_POST['txtpassword'];
	
	if($con->query("update  user_side set password='$pass' where email='$email'"))
	{
		unset($_SESSION['email']);
		$_SESSION['error']="Successfully Change Password.....!";
		header("location:user_login.php");
	}
	else
	{
		echo mysqli_error($con);
		$_SESSION['error']="Enter Valid Email.....!";
		//header("location:user_login.php");
	}
}
else
{
	
	header("location:user_login.php");
}
?>