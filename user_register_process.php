<?php
include("connection.php");

if(isset($_POST['insert']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobileno=$_POST['mobileno'];
$dob=$_POST['dob'];
$profile=$_FILES['profile']['name'];
$profile_tmp=$_FILES['profile']['tmp_name'];
$_FILES['profile']['size'];
$_FILES['profile']['type'];
$_FILES['profile']['error'];
move_uploaded_file($profile_tmp,"image/".$profile);

$con->query("insert into user_side(name,email,password,mobileno,dob,profile)
values('$name','$email','$password','$mobileno','$dob','$profile')");
header("location:user_register.php");
}

if(isset($_GET['delete_id']) && $_GET['delete_id'] !="")
{
	$id=$_GET['delete_id'];
	$query=$con->query("delete from user_side where user_id='$id'");
header("location:index.php");
}
?>