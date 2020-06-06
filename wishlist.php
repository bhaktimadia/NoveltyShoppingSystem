<?php include("header.php"); ?>
<!-- Shop Sideabr Product Container
============================================ -->
<div class="pages wishlist-page">
	<div class="container">
		<div class="row">
		
			<div class="col-sm-12">
				<div class="cart-page-container wishlist-page-container fix">
					<div class="cart-page-title wishlist-page-title text-center"><h1>Wishlist</h1>
					</div>
					
					<form action="user_process.php" id="cart-form">
						<div class="table-responsive">
						
							<fieldset>
								<table class="table-cart table-wishlist data-table table" id="shopping-cart-table">
									<thead>
										<tr>
											<th></th>
											<th>Items</th>
											<th>Price</th>
											<th>Stock Status</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
									<?php 
	//$id=$_GET['productinsert'];
			$query=$con->query("select * from wish_list as W,product_details P where W.product_id=P.product_id");
			while($result=$query->fetch_array()){
				?>
										<tr>
											<td><a href="user_process.php?delete_id=<?php echo$result['wishlist_id']; ?>" class="cart-remove"><i class="mo-cross-rounde"></i></a></td>
											<td><div class="cart-items fix">
												<a href="viewdetail.php?pid=<?php echo $result['product_id']; ?>" class="cart-image"> 


												<li>							

							
			
<img src="image/<?php echo $result['image']; ?>" alt="product" height="100px" width="100px" />&nbsp;</a></li>

												</a>
												<div class="cart-item-content fix">
													<h3 class="title"><a href="viewdetail.php?pid=<?php echo $result['product_id']; ?>"><?php echo $result['product_name']; ?></a></h3>
													<span>Size : <strong><?php echo $result['product_quantity']; ?></strong></span>
													<span>Color : <strong>
<?php
$queryc=$con->query("select * from color");
			while($resultc=$queryc->fetch_array()){
							if($result['product_color']==$resultc['color_id']){			$color=$resultc['color_name'];	?>
												<li>							

<table width="10px" height="10px"  style="background-color:<?php echo $color;?>;"><tr><td>&nbsp;</td></tr></table></li><?php } } ?>
</strong></span>
												</div>
											</div></td>
											<td><span class="cart-price">₹ <?php echo $result['product_prise']; ?></span></td>
											<td ><span class="stock-status">In Stock</span></td>
											<td><div class="add-cart"><a href="addtocart.php?pid=<?php echo $result['product_id'];?>" class="add-cart-btn">Add to Cart</a></div></td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
							</fieldset>
						</div>
					</form>
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
							<div class="brand-item">
							<img src="image/<?php echo $result['image']; ?>"  width="150px" height="120px" />
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