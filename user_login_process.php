<?php
include("connection.php");
//session_start();
if(isset($_POST['insert']))
{
$email=$_POST['email'];
$password=$_POST['password'];

$query=$con->query("select * from user_side where email='$email' and password='$password'");
 $cnt=mysqli_num_rows($query);
$result=$query->fetch_array();

if($cnt==1)
{
	$_SESSION['user_id']=$result['user_id'];
	header("location:index.php");
}
else
{
	$_SESSION['error']="Incorrect Username or Password ...";
	header("location:user_login.php");
}
}
?>