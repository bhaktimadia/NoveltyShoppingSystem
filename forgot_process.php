<?php 
include("connection.php");
session_start();
include("mailDemo/mailfunction.php");
if(isset($_POST['btnsubmit']))
{
	$email=$_POST['txtemail'];
	
	
	$query=$con->query("select * from user_side where email='$email'");
	$result=mysqli_fetch_array($query);
	if(mysqli_num_rows($query)==1)
	{
		$otp=rand(1111,9999);
		$_SESSION['email']=$email;
		$_SESSION['otp']=$otp;
		$msg="Your One Time Password:".$otp;
		if(send_mail($email,"Forgot Password",$msg))
		{
		header("location:otp.php");}
		else{
			$_SESSION['error']="Check Network.....!";
			header("location:forgot.php");
		}
	}
	else
	{
		
		$_SESSION['error']="Enter Valid Email.....!";
		header("location:forgot.php");
	}
}
else
{
	
	header("location:login.php");
}
?>