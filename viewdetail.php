<?php include("header.php");
 ?>
 
<!-- Page Banner
============================================ -->

<!-- Product Details 1
============================================ -->
<div class="product-details pages">
	<div class="container">
		<div class="row">
		<?php 
	$id=$_GET['pid'];
			$query=$con->query("select * from product_details as PD,product_image as PI where PD.product_id=PI.product_id and PD.product_id='$id'");
			while($result=$query->fetch_array()){
		?>
			<div class="col-sm-12">
				<!-- Product Container -->
				<div class="pro-info-container fix">
					<!-- Product Info -->
					<div class="product-info col-md-6 col-xs-12">
						<!-- Product Info Cat -->
						<div class="pro-info-cat"><p>__________________________________________</p></div>
						<!-- Product Info Title Ratting -->
						<div class="pro-title-rating fix">
							<h2><?php echo $result['product_name']; ?></h2>
							<div class="ratting pro-info-ratting float-right">
								<i class="mo-star star active"></i>
								<i class="mo-star star active"></i>
								<i class="mo-star star active"></i>
								<i class="mo-star star active"></i>
								<i class="mo-star star active"></i>
							</div>
						</div>
						<!-- Product Info Tab List -->
						<ul class="pro-info-tab-list">
							<li class="active"><a href="#description" data-toggle="tab">Description</a></li>
							
							<li><a href="#reviews" data-toggle="tab">Reviews</a></li>
						</ul>
						<!-- Product Info Tab container -->
						<div class="pro-info-tab-container tab-content fix">
							<!-- Product Info Tab -->
							<div class="pro-info-tab tab-pane active" id="description">
								<div class="pro-size">
										<ul><h3><b>Product Name:  </b> <?php echo $result['product_name']; ?></h3> </ul>
								</div>
								
									<div class="pro-size">
									
										<ul><h3><b>Category:  </b><?php
							$querysc=$con->query("select * from subcategory");
							while($resultsc=$querysc->fetch_array()){
							if($result['subcategory_id']==$resultsc['subcategory_id']){			$subcategory=$resultsc['subcategory_name'];	?><?php echo $subcategory ?></h3></a>
							<?php } } ?> 
										
											</ul>
										
									</div>
								<div class="pro-color-size fix">
									<div class="pro-color">
										<ul><h3><b>Colors: </b>
											
											<?php
$queryc=$con->query("select * from color");
			while($resultc=$queryc->fetch_array()){
							if($result['product_color']==$resultc['color_id']){			$color=$resultc['color_name'];	?>
												</h3>							

<table width="20px" height="20px"  style="background-color:<?php echo $color;?>;"><tr><td>&nbsp;</td></tr></table></li>
			<?php } } ?>
											</ul>
									</div>
									<div class="pro-size">
										<ul><h3><b>Sizes:</b> 
											
												<?php echo $result['product_quantity']; ?></h3>
											</ul>
										
									</div>
								</div>

								<div class="pro-info-price fix">
									<h2><b>₹ <?php echo $result['product_prise']; ?></b></h2>
								
								</div>
								
								<div class="pro-info-quantity-cart fix">
									
									<a href="addtocart.php?pid=<?php echo $result['product_id'];?>"><button class="pro-info-addcart"><i class="mo-cart"></i>Add to Cart</button></a>
								</div>
							</div>
							
							
							
							
							<!-- Product Review Tab -->
							<div class="pro-review-tab tab-pane" id="reviews">
								<div class="pro-review-container">
									<?php  
									$piid=$result['product_id'];
									$qr=$con->query("select * from feedback where product_id='$piid'");
									while($rr=$qr->fetch_array()){
									?>
									
									<div class="sin-pro-review">
										<div class="rev-image float-left">
											<img src="img/comments/1.png" alt="" />
										</div>
										<div class="rev-content fix">
											<div class="rev-head">
												<h3><?php echo $rr['name'];?></h3>
												
											</div>
											<p><?php echo $rr['product_review'];?></p>
										</div>
									</div>
									
									<?php } ?>
									
								</div>
								<div class="pro-rev-form fix">
									<h2>Add your review</h2>
									<form action="user_process.php" id="rev-form" method="post" class="moon-form">
										<div class="input-box input-box-2">
											<input type="text" name="txtname" placeholder="Name">
											<input type="hidden" name="txtpid" value="<?php echo $result['product_id'];?>">
										</div>
										
										
										<div class="input-box">
											<textarea name="review" id="rev-message" placeholder="Message" rows="5"></textarea>
										</div>
										<div class="input-box">
											<input type="submit" name="reviewinsert" value="Submit">
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Product Image -->
					<div class="pro-image" align="center">
						<a href="#"><img src="image/<?php echo $result['image']; ?>" alt="product" height="400px" width="350px"/></a>
				</div>
			</div>
			
			<?php } ?>
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