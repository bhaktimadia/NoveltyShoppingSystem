<?php include("header.php"); ?>
<!-- Shop Page Banner
============================================ -->
<div class="shop-page-banner">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2>Make A Something New yourself </h2>
				<a href="index.php">See Collection</a>
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
						<a href="shop.php">all</a>
					</div>
					<!-- Product Brands -->
					<div class="product-brand">
								<?php 
									$brand1=$con->query("select * from brand");
									while($resultbrand1=$brand1->fetch_array()){
								?>
						<ul>
							<li><a href="brand.php?bid=<?php echo $resultbrand1['brand_id'];  ?>">
							<?php echo $resultbrand1['brand_name']; ?>
							</a>
							</li>
						</ul>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="col-lg-9 col-md-8 col-xs-12 shop-products">
				<div class="row">
				
					<!-- Top Tool Bar -->
					<div class="col-xs-12">
						<div class="shop-top-toolbar">
							<ul class="view-mode float-left">
								<li class="active"><a href="#grid-view" data-toggle="tab"><i class="mo-grid"></i></a></li>
								<li><a href="#list-view" data-toggle="tab"><i class="mo-list"></i></a></li>
							</ul>
							<p class="float-right">Showing 1–9 of 17 results</p>
						</div>
					</div>
					<div class="tab-content col-xs-12">
						<div class="tab-pane row active" id="grid-view">
						<?php 
			$query=$con->query("select * from product_details as PD,product_image as PI where PD.product_id=PI.product_id  limit 12" );
			while($result=$query->fetch_array()){
		?>
							<!-- Single Product -->
							<div class="col-lg-4 col-sm-6">
								<div class="sin-product">
									<!-- Product Image -->
									<div class="pro-image">
										<a href="#"><img src="admin/image/<?php echo $result['image']; ?>" alt="product" height="200px" width="100px" /></a>
										<!-- Product Hover Content -->
										<!-- Product Hover Content -->
						<div class="pro-hover fix" style="background-image: url('admin/image/<?php echo $result['image']; ?>');">
							<!-- Product Hover Action -->
							<div class="pro-hover-action animated text-center">
								<button class="add-cart pro-action"><i class="mo-cart"></i></button>
								<a href="viewdetail.php?pid=<?php echo $result['product_id']; ?>" class="quick-view pro-action" ><i class="mo-eye"></i></a>
								<a href="user_process.php?productinsert=<?php echo $result['product_id']; ?>"  class="wishlist pro-action"><i class="mo-heart"></i></a>
							</div>
							<!-- Product Hover Options -->
							
						</div>
					</div>
					<!-- Product Content -->
					<div class="pro-content">
						<div class="top fix">
							<h3><a><?php echo $result['product_name']; ?></a></h3>
							<p class="price float-right">₹ <?php echo $result['product_prise']; ?></p>
						</div>
						<div class="bottom fix">
							<a class="pro-cat float-left">
<?php
$queryb=$con->query("select * from brand");
			while($resultb=$queryb->fetch_array()){
							if($result['brand_id']==$resultb['brand_id']){			$brand=$resultb['brand_name'];	?><?php echo $brand ?>
							</a>
							<a href="shopbrand.php?sbid=<?php echo $result['brand_id']; ?>" 
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
			<a href="#" class="shop-link"><i class="mo-more"></i></a>
		</div>
	</div>
</div>

					
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
							<a href="shopbrand.php?sbid=<?php echo $result['brand_id']; ?>" ><div class="brand-item"><image src="admin/image/<?php echo $result['image']; ?>"  width="150px" height="120px" />
							</div></a>
							
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
