<?php
include("connection.php");

if(isset($_POST['editprofile']))
{
		$user=$_SESSION['user_id'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$mobileno=$_POST['mobileno'];
		$dob=$_POST['dob'];
		
		if(isset($_FILES['profile']['name']) && $_FILES['profile']['name']!="")
		{
			$profile=$_FILES['profile']['name'];
		$profile_tmp=$_FILES['profile']['tmp_name'];
		$_FILES['profile']['size'];
		$_FILES['profile']['type'];
		$_FILES['profile']['error'];
		move_uploaded_file($profile_tmp,"image/".$profile);

			if($con->query("update user_side set name='$name',email='$email',
			password='$password',mobileno='$mobileno',dob='$dob',profile='$profile' where user_id='$user'"))
			{
			
				header("location:myprofile.php");
			}
			else
			{
				header("location:myprofile.php");
			}
			
		}
		else
		{
			if($con->query("update user_side set name='$name',email='$email',
			password='$password',mobileno='$mobileno',dob='$dob' where user_id='$user'"))
			{
			
				header("location:myprofile.php");
			}
			else
			{
				header("location:myprofile.php");
			}
			
		}
		
}
?>