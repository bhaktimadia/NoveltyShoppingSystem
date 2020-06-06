<?php include("connection.php"); 


	$query=$con->query("select * from user_side US,reminder R where US.user_id=R.user_id and R.st=0");
	include("mailDemo/mailfunction.php");
	while($row=$query->fetch_array())
	{
		
		$date=date('Y-m-d', strtotime($row['rdate']. ' + '.$row['noofday'].' days'));
		if(date('Y-m-d')==$date)
		{
			$rid=$row['reminder_id'];
			$email=$row['email'];
			$msg="Your Order Is Ready To Delivery.....";
			send_mail($email,"Order Remainder",$msg);
			$con->query("update from reminder set rdate='$date',st=1 where reminder_id='$rid'");
		}
	}



?>
<!doctype html>
<html class="no-js" lang="en-US">

<!-- Mirrored from moonhtml.onaz.io/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Feb 2018 08:03:02 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title> Novelty</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Fav Icon
	============================================ -->
	<link id="favicon" rel="icon" type="image/png" href="img/favicon.ico" />
	<!-- Google web fonts
	============================================ -->
	<link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700italic,900italic,900,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<!-- Style Import CSS
	============================================ -->
	<link rel="stylesheet" type="text/css" href="css/custom-style.css" />
	<!-- RS-slider CSS
	============================================ -->
	<link rel="stylesheet" type="text/css" href="lib/rs-plugin/css/settings.css" media="screen" />	
	
	<!-- Modernizr JS  
	============================================ -->
	<script src="js/vendor/modernizr-2.8.3.min.js"></script>
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Header Top
============================================ -->
<div class="header-top">
	<div class="container">
		<div class="row">
			<!-- Header Top Left -->
			<div class="header-top-left col-sm-6">
				<ul class="header-login-reg float-left">
					<li><a href="seller/index.php">Blog</a></li>
					
				</ul>
			</div>
			<!-- Header Top Right -->
			<div class=" header-top-right col-sm-6">
				<nav>
				<ul class="header-login-reg float-right">
				<?php if(isset($_SESSION['user_id']) && $_SESSION['user_id']!="")
				{ ?>
						<li><a href="logout.php">LogOut</a></li>
						
			
				<?php }else{?>
				
					<li><a href="user_login.php">Log in</a></li>
					<li><a href="user_register.php">Register</a></li>
					<?php }?>
					
					
				</ul>
				</nav>
			</div>
		</div>
	</div>
</div>
<!-- Header Bottom
============================================ -->
<div class="header-bottom">
	<div class="container">
		<div class="row">
			<!-- Header Logo -->
			<div class="logo col-md-2 col-sm-4 col-xs-5"><a href="index.php"><img src="img/logo.png" alt="logo" /></a></div>
			<!-- Main Menu -->
			<div class="main-menu col-md-7 hidden-sm hidden-xs">
				<nav>
					<ul>
						<li class="active"><a href="index.php">Home</a>
							
							
						</li>
						<li><a href="productview.php">shop</a>
							<!-- Mega Menu -->
							<div class="mega-menu mega-menu1">
								<?php 
									$cat1=$con->query("select * from main_category");
									while($resultcat1=$cat1->fetch_array()){
								?>
								<div class="megamenu-column megamenu-column1">
									<ul>
										<li><a href="productview.php?maincat=<?php echo $resultcat1['maincategory_id']; ?>"><?php echo $resultcat1['maincategory_name']; ?></a></li>
										<?php 
										$id=$resultcat1['maincategory_id'];
										$subcat1=$con->query("select * from category where maincategory_id='$id'");
										while($resultsubcat1=$subcat1->fetch_array()){ ?>
										<li><a href="productview.php?cat=<?php echo $resultsubcat1['category_id']; ?>"><?php echo $resultsubcat1['category_name']; ?></a></li>
										
				<?php } ?>
									</ul>
								</div>
				<?php } ?>
								
							</div>
						</li>
						<li><a href="#">Brand</a>
						
							<!-- Sub Menu -->
							<ul class="sub-menu">
							<?php 
									$brand1=$con->query("select * from brand");
									while($resultbrand1=$brand1->fetch_array()){
								?>
								<li><a href="productview.php?bid=<?php echo $resultbrand1['brand_id'];  ?>"><?php echo $resultbrand1['brand_name']; ?></li>
								<?php } ?>
							</ul>
						</li>
						
						
							<?php if(isset($_SESSION['user_id'])){ ?>
							<li><a href="wishlist.php">Wishlist</a></li>
							
						
							<li><a href="#">My Account</a>
						
							<!-- Sub Menu -->
							<ul class="sub-menu">
							
								<li><a href="myprofile.php">MyProfile</li>
								<li><a href="myorder.php">My Order</li>
								<li><a href="mysubcribe.php">My Subcribe</li>
								<?php 
									$query=$con->query("select * from user_side");
									$i=1;
									while($result=$query->fetch_array())
									{
								?>
								<li><a href="user_register_process.php?delete_id=<?php echo$result['user_id']; ?>">Deactivate Account</li>
								<?php $i++; } ?>
								<li><a href="logout.php">LogOut</li>
								
							</ul>
						</li>
						<?php } ?>
						
					</ul>
				</nav>
			</div>
			<!-- Header Search & Cart -->
			<div class="search-cart col-md-3 col-md-offset-0 col-sm-5 col-sm-offset-3 col-xs-7">
				<!-- Header Cart -->
				<div class="header-cart float-right">
					<a href="display_cart.php" class="cart-btn"><i class="mo-cart"></i></a>
				</div>
				<div class="header-search float-right">
					<button class="search-btn"><i class="mo-search"></i></button>
					<form action="#" class="search-form">
						<input type="text" placeholder="Search..." />
					</form>
				</div>
			</div>
				<!-- Header Search -->
				
			</div>
		</div>
	</div>

