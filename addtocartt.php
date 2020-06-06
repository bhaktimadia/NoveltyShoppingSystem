<?php 
include("connection.php");



if(isset($_GET['pid']) && $_GET['pid'] !="")
{
	
	$query = $con->query("select * from product_details as PD,product_image as PI where PD.product_id=PI.product_id and PD.product_id=".$_GET['pid']);
	$res = mysqli_fetch_array($query);
	
	if(isset($_SESSION['cart']) && is_array($_SESSION['cart']))
	{
		
		$max=count($_SESSION['cart']);
		$data = 0;
		for($i = 0; $i <$max; $i++)
		{
			if($_SESSION['cart'][$i]['productid'] == $res['product_id'])
			{
				if($_SESSION['cart'][$i]['qty'] < 100)
				{
					$_SESSION['cart'][$i]['qty']  += 1;
				}
				$data =1;
				header("location:display_cart.php");
			}
		}
		if($data == 0)
		{
				
			$_SESSION['cart'][$max]['productid']=$res['product_id'];
			$_SESSION['cart'][$max]['name']=$res['product_name'];
			$_SESSION['cart'][$max]['qty']=1;
			$_SESSION['cart'][$max]['price']=$res['product_prise'];
			$_SESSION['cart'][$max]['image']=$res['image'];
			$_SESSION['cart'][$max]['type']=$res['product_type'];
			$_SESSION['cart'][$max]['size']=$res['product_quantity'];
			$_SESSION['cart'][$max]['sid']=$res['seller_id'];
			header("location:display_cart.php");
		}
		
	}
	else
	{
		$_SESSION['cart']=array();
		
		$_SESSION['cart'][0]['productid']=$res['product_id'];
		$_SESSION['cart'][0]['name']=$res['product_name'];
		$_SESSION['cart'][0]['qty']=1;
		$_SESSION['cart'][0]['price']=$res['product_prise'];
		$_SESSION['cart'][0]['image']=$res['image'];
		$_SESSION['cart'][0]['type']=$res['product_type'];
		$_SESSION['cart'][0]['size']=$res['product_quantity'];
		$_SESSION['cart'][0]['sid']=$res['seller_id'];
		
header("location:display_cart.php");
	}
	
}
?>