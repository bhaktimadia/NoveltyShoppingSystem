<?php include("header.php"); ?>
<!-- Shop Page Banner
============================================ -->
<div class="shop-page-banner">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2>Make A Something New yourself </h2>
				<a href="shop.php">See Collection</a>
			</div>
		</div>
	</div>
</div>
<!-- Shop Sideabr Product Container
============================================ -->
<div class="shop-page">
	<div class="container">
		<div class="row">
		
			<div class="col-lg-3 col-md-4 col-xs-12 shop-sidebar">
				<!-- Shop Single Sidebar Category -->
				<div class="sin-shop-sidebar">
					<div class="title fix">
						<h4>Categories</h4>
						<a href="#">all</a>
					</div>
					<!-- treeview start -->
					<div id="cat-treeview" class="product-cat">
								<?php 
									$cat1=$con->query("select * from main_category");
									while($resultcat1=$cat1->fetch_array()){
								?>
						<ul>
							<li class="closed"><a href="#"><?php echo $resultcat1['maincategory_name']; ?></a>
								<ul>

									<?php 
										$id=$resultcat1['maincategory_id'];
										$subcat1=$con->query("select * from category where maincategory_id='$id'");
										while($resultsubcat1=$subcat1->fetch_array()){ ?>
										<li><a href="shop.html"><?php echo "<option value=".$resultsubcat1['category_id'].">".$resultsubcat1['category_name']."</option>"; ?></a></li>
				

										
								<?php } ?>	
                                </ul>								
							</li>										
						</ul>
						<?php } ?>
					</div>
					
					
				</div>
				
				
				
				<!-- Shop Single Sidebar Brands -->
				<div class="sin-shop-sidebar">
					<div class="title fix">
						<h4>Brands</h4>
						<a href="#">all</a>
					</div>
					<!-- Product Brands -->
					<div class="product-brand">
								<?php 
									$brand1=$con->query("select * from brand");
									while($resultbrand1=$brand1->fetch_array()){
								?>
						<ul>
							<li><a href="brand.php?bid=<?php echo $resultbrand1['brand_id'];  ?>"><?php echo $resultbrand1['brand_name']; ?>
							</a></li>
						</ul>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="col-lg-9 col-md-8 col-xs-12 shop-products">
				<div class="row">
				<?php 
				$id=$_GET['bid'];
			$query=$con->query("select * from product_details as PD,brand as B where PD.brand_id=B.brand_id AND PD.brand_id='$id'");
			while($result=$query->fetch_array()){
		?>
			
					<!-- Top Tool Bar -->
					
					<div class="tab-content col-xs-12">
						<div class="tab-pane row active" id="grid-view">
						<?php 
		
		if(isset($_REQUEST['pagenum']) == "")
		{
			
			$pagenum = 1;
		}
		else
		{
			
			$pagenum=$_REQUEST['pagenum'];
		}
		$query1=$con->query("select * from product_details as PD,product_image as PI where PD.product_id=PI.product_id");
		$row1=mysqli_num_rows($query1);
		$page_row=9;
		$last=ceil($row1/$page_row);
		if($pagenum < 1)
		{
			$pagenum =1;
		}
		elseif($pagenum > $last)
		{
			$pagenum = $last;
		}
		
		$limit = "limit ".($pagenum-1) * $page_row.",".$page_row;
		
		
			$query=$con->query("select * from product_details as PD,product_image as PI where PD.product_id=PI.product_id  $limit" );
			while($result=$query->fetch_array()){
		?>
							<!-- Single Product -->
							<div class="col-lg-4 col-sm-6">
								<div class="sin-product">
									<!-- Product Image -->
									<div class="pro-image">
										<a href="#"><img src="image/<?php echo $result['image']; ?>" alt="product" height="200px" width="100px" /></a>
										<!-- Product Hover Content -->
										<!-- Product Hover Content -->
						<div class="pro-hover fix" style="background-image: url('image/<?php echo $result['image']; ?>');">
							<!-- Product Hover Action -->
							<div class="pro-hover-action animated text-center">
								<a href="addtocart.php?pid=<?php echo $result['product_id'];?>" class="add-cart pro-action"><i class="mo-cart"></i></a>
								<a href="viewdetail.php?pid=<?php echo $result['product_id']; ?>" class="quick-view pro-action" ><i class="mo-eye"></i></a>
								<a href="user_process.php?productinsert=<?php echo $result['product_id']; ?>&&iid=<?php echo $result['product_image_id']; ?>"  class="wishlist pro-action"><i class="mo-heart"></i></a>
							</div>
							<!-- Product Hover Options -->
							
						</div>
					</div>
					<!-- Product Content -->
					<div class="pro-content">
						<div class="top fix">
							<h3><a href="viewdetail.php"><?php echo $result['product_name']; ?></a></h3>
							<p class="price float-right">Rs. <?php echo $result['product_prise']; ?></p>
						</div>
						<div class="bottom fix">
							<a href="brand.php?bid=<?php echo $result['brand_id']; ?>" class="pro-cat float-left">
							<?php
$queryb=$con->query("select * from brand");
			while($resultb=$queryb->fetch_array()){
							if($result['brand_id']==$resultb['brand_id']){			$brand=$resultb['brand_name'];	?><?php echo $brand ?>
							</a>
			<?php } } ?>
							<div class="ratting float-right">
								<i class="mo-star star active"></i>
								<i class="mo-star star active"></i>
								<i class="mo-star star active"></i>
								<i class="mo-star star active"></i>
								<i class="mo-star star active"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Single Product -->
			<?php } ?>
		</div>	
		<!-- More Product Link -->
		<div class="more-product col-sm-12 text-center">
		 <?php 
 if($pagenum == 1 )
 {
	 
	 
 }
 else
 {?>
 <a href="<?php echo $_SERVER['PHP_SELF']?>?pagenum=1 ">&nbsp;FIRST&nbsp;</a>
 <?php 
 $prs=$pagenum-1;
 ?>
 <a href="<?php echo $_SERVER['PHP_SELF']?>?pagenum=<?php echo $prs;?> "> &nbsp;BACK &nbsp;</a>
&nbsp;<?php 

}


$next=$pagenum + 1;
echo $pagenum." To ".$last ?>&nbsp;
  
  <a href="<?php echo $_SERVER['PHP_SELF']?>?pagenum=<?php echo $next;?> ">&nbsp;NEXT&nbsp;</a>
 <?php 
 
 ?>
 <a href="<?php echo $_SERVER['PHP_SELF']?>?pagenum=<?php echo $last;?> ">&nbsp; LAST &nbsp;</a>
<?php 
  ?>
 
			
		</div>
	</div>
</div>

					
							
						</div>
						<?php } ?>
					</div>
			</div>
	</div>
</div>
<!-- Brand Area
============================================ -->
<div class="brand-area">
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-sm-3">
				<div class="section-title-2"><h1>Top Brands</h1></div>
			</div>
			<div class="col-md-10 col-sm-9 text-center">
				<!-- Brands Slider -->
				<div class="brand-slider">
					
						<?php
							$query=$con->query("select * from brand");
							while($result=$query->fetch_array()){
						?>
							<div class="brand-item"><image src="image/<?php echo $result['image']; ?>"  width="150px" height="120px" />
							</div>
							<?php }  ?>
				</div>
			</div>
		</div>
	</div>	
</div> 
<style>
body {
    background-color:#FFCABA;
}
</style>

<?php include("footer.php"); ?>