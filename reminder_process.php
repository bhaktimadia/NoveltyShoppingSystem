<?php
include("connection.php");

if(isset($_POST['btnsubmit']) && $_POST['btnsubmit']!="")
{
		$pid=$_POST['txtpid'];
		$uid=$_SESSION['user_id'];
		$day=$_POST['txtday'];
		$date=date('Y-m-d');
		
		
			if($con->query("insert into reminder(product_id, user_id, rdate, noofday) values('$pid','$uid','$date','$day')"))
			{
			
				header("location:myorder.php");
			}
			else
			{
				header("location:myorder.php");
			}
			
	
		
}
if(isset($_GET['sid']) && $_GET['sid']!="")
{
		$sid=$_GET['sid'];
		if($con->query("delete from reminder where reminder_id='$sid'"))
			{
			
				header("location:mysubcribe.php");
			}
			else
			{
				header("location:mysubcribe.php");
			}
			
	
		
}
?>