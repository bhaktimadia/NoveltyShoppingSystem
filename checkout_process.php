<?php
include("connection.php");

$uid=$_SESSION['user_id'];
 $sid=$_SESSION['aid'];
$date=date('Y-m-d');


$con->query("insert into order_table(user_id,shipping_id,order_date,ostatus) values('$uid','$sid','$date','1')");
$oid=mysqli_insert_id($con);


$count = count($_SESSION['cart']);
$r=rand(1111,9999);
														$tot_amount=0;
														for($i=0; $i<$count; $i++)
														{
															$pid = $_SESSION['cart'][$i]['productid'];
															$image = $_SESSION['cart'][$i]['image'];
															$pname = $_SESSION['cart'][$i]['name'];
															$type = $_SESSION['cart'][$i]['type'];

															$price = $_SESSION['cart'][$i]['price'];
															$ssid = $_SESSION['cart'][$i]['sid'];
															$qty = $_SESSION['cart'][$i]['qty'];
															$tot = $price * $qty;
															$tot_amount += $tot;
$con->query("insert into order_detail(order_id,product_id,product_name,product_quantity,product_price,product_color,status,seller_id,rdid)
values('$oid','$pid','$pname','$qty','$price','0','1','$ssid','$r')");
	
	}
	
	if(isset($_POST['payment']) && $_POST['payment']=="online")
	{
		header("location:checkout_pay.php");
	}else
	{
		unset($_SESSION['cart']);
		unset($_SESSION['aid']);
		header("location:index.php");
	}