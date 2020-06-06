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
										<li><a href="productview.php?cat=<?php echo $resultsubcat1['category_id']; ?>"><?php echo "<option value=".$resultsubcat1['category_id'].">".$resultsubcat1['category_name']."</option>"; ?></a></li>
				

										
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
							<li><a href="productview.php?bid=<?php echo $resultbrand1['brand_id'];  ?>"><?php echo $resultbrand1['brand_name']; ?>
							</a></li>
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
							<p class="float-right"></p>
						</div>
					</div>
					<div class="tab-content col-xs-12">
						<div class="tab-pane row active" id="grid-view">
						<?php
						if(isset($_GET['maincat']) && $_GET['maincat'] !="")
						{
							$maincat=$_GET['maincat'];
							$query=$con->query("select * from  product_details PD
								JOIN product_image PDI ON PD.product_id=PDI.product_id  
								JOIN subcategory SC ON SC.subcategory_id=PD.subcategory_id  
								JOIN category C ON C.category_id=SC.category_id  
								JOIN main_category MC ON MC.maincategory_id=C.maincategory_id
								JOIN brand B ON B.brand_id=PD.brand_id
								where MC.maincategory_id='$maincat'");
							
						}
						elseif(isset($_GET['bid']) && $_GET['bid'] !="")
						{
							$bid=$_GET['bid'];
							$query=$con->query("select * from  product_details PD
								JOIN product_image PDI ON PD.product_id=PDI.product_id  
								JOIN subcategory SC ON SC.subcategory_id=PD.subcategory_id  
								JOIN category C ON C.category_id=SC.category_id  
								JOIN main_category MC ON MC.maincategory_id=C.maincategory_id
								JOIN brand B ON B.brand_id=PD.brand_id
								where B.brand_id='$bid'");
							
						}						
						elseif(isset($_GET['cat']) && $_GET['cat'] !="")
						{
							$cat=$_GET['cat'];
							$query=$con->query("select * from  product_details PD
								JOIN product_image PDI ON PD.product_id=PDI.product_id  
								JOIN subcategory SC ON SC.subcategory_id=PD.subcategory_id  
								JOIN category C ON C.category_id=SC.category_id  
								JOIN main_category MC ON MC.maincategory_id=C.maincategory_id
								JOIN brand B ON B.brand_id=PD.brand_id
								where C.category_id='$cat'");	
							
						}
						else
						{
								$query=$con->query("select * from  product_details PD
								JOIN product_image PDI ON PD.product_id=PDI.product_id  
								JOIN subcategory SC ON SC.subcategory_id=PD.subcategory_id  
								JOIN category C ON C.category_id=SC.category_id  
								JOIN main_category MC ON MC.maincategory_id=C.maincategory_id
								JOIN brand B ON B.brand_id=PD.brand_id");
						}		
								
			while($result=$query->fetch_array()){
		?>
							<!-- Single Product -->
							<div class="col-lg-4 col-sm-6">
								<div class="sin-product">
									<!-- Product Image -->
						<?php 
							$pid=$result['product_id'];
							$query1=$con->query("select * from product_image where product_id='$pid'");
							$pi=1;
							while($result1=$query1->fetch_array())
							{
								if($result['product_id']==$result1['product_id'] and $pi=1)
								{
									$pi=0;
							?>
									<div class="pro-image">
										<a href="#"><img src="image/<?php echo $result1['image']; ?>" alt="product" height="200px" width="100px" /></a>
										<!-- Product Hover Content -->
										<!-- Product Hover Content -->
											<div class="pro-hover fix" style="background-image: url('image/<?php echo $result1['image']; ?>');">
												<!-- Product Hover Action -->
												<div class="pro-hover-action animated text-center">
													<a href="addtocart.php?pid=<?php echo $result['product_id'];?>" class="add-cart pro-action"><i class="mo-cart"></i></a>
													<a href="viewdetail.php?pid=<?php echo $result['product_id']; ?>" class="quick-view pro-action" ><i class="mo-eye"></i></a>
													<a href="user_process.php?productinsert=<?php echo $result['product_id']; ?>"  class="wishlist pro-action"><i class="mo-heart"></i></a>
												</div>
												<!-- Product Hover Options -->
												
											</div>
									</div>
							<?php } } ?>
					<!-- Product Content -->
					<div class="pro-content">
						<div class="top fix">
							<h3><a href="viewdetail.php"><?php echo $result['product_name']; ?></a></h3>
							<p class="price float-right">? <?php echo $result['product_prise']; ?></p>
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