<?php
include("connection.php");
//WISH_LIST
if(isset($_GET['productinsert']))
{
	
	$product_id=$_GET['productinsert'];
	$query=$con->query("select * from product_details where product_id='$product_id'");
	$result=mysqli_fetch_array($query);
	$image_id=$_GET['iid'];
	$query1=$con->query("select * from product_image where product_image_id='$image_id'");
	$result1=mysqli_fetch_array($query1);
$image=$result1['image'];
$product_name=$result['product_name'];
$product_quantity=$result['product_quantity'];
$product_color=$result['product_color'];
$product_prise=$result['product_prise'];

//print_r($_POST);

	if($con->query("INSERT INTO wish_list(image,product_id,product_name,product_quantity,product_color,product_prise) VALUES ('$image','$product_id','$product_name','$product_quantity','$product_color','$product_prise')"))
		{
						$_SESSION['error']="ADD WISHLIST...!";
					header("location:index.php");	
		}
		else
		{
			echo mysqli_error($con);
			$_SESSION['error']="DON'T ADD WISHLIST...!";
			//header("location:index.php");	
		}
	
}

if(isset($_GET['delete_id']) && $_GET['delete_id'] !="")
{
	$id=$_GET['delete_id'];
	$query=$con->query("delete from wish_list where wishlist_id='$id'");
header("location:wishlist.php");
}

if(isset($_POST['reviewinsert']))
{
	
	$name=$_POST['txtname'];
	$pid=$_POST['txtpid'];
	$review=$_POST['review'];

	if($con->query("INSERT INTO feedback(product_id,name,product_review) VALUES ('$pid','$name','$review')"))
		{
						$_SESSION['error']="ADD feedback...!";
					header("location:index.php");	
		}
		else
		{
			echo mysqli_error($con);
			$_SESSION['error']="DON'T ADD WISHLIST...!";
			//header("location:index.php");	
		}
	
}
?>