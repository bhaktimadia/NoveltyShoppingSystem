<?php
include("header.php");

?>
						

<!-- Mobile Menu
============================================ -->

<!-- Shop Sideabr Product Container
============================================ -->
<div class="pages cart-page">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="cart-page-container fix">
					<!-- Cart Page Tab List -->

					<!-- Cart Page Tab Container -->
					<div class="tab-content">
						<!-- Cart Page Tab -->
						<div class="tab-pane active" id="shopping-cart">
							<div class="cart-page-title text-center"><h1>Shopping Cart</h1></div>
							<?php if(isset($_SESSION['cart'])){?>

							<form action="#" id="cart-form">
								<div class="table-responsive">
									<fieldset>
										<table class="table-cart data-table table" id="shopping-cart-table">
											<thead>
												<tr>
													

													<th>Items</th>
													<th>Price</th>
													<th>Quantity</th>
													<th>Total</th>
													<th>Remove</th>
												</tr>
											</thead>
											<?php 
											//print_r($_SESSION);
								$count = count($_SESSION['cart']);
								$tot_amount=0;
								for($i=0; $i<$count; $i++)
								{
									$pid = $_SESSION['cart'][$i]['productid'];
									$image = $_SESSION['cart'][$i]['image'];
									$pname = $_SESSION['cart'][$i]['name'];
							        $type = $_SESSION['cart'][$i]['type'];

									$price = $_SESSION['cart'][$i]['price'];
									$qty = $_SESSION['cart'][$i]['qty'];
									$tot = $price * $qty;
									$tot_amount += $tot;
								?>
											<tbody>
												<tr>
													<td>	
												
													<div class="cart-items fix">
														<a href="#" class="cart-image"><img src="image/<?php echo $image; ?>" alt="" /></a>
														<div class="cart-item-content fix">
															<h3 class="title"><a href="#"><?php echo $pname?></a></h3>
															<span>type: <strong><?php echo $type;?></strong></span>
														</div>
													</div></td>
													<td><span class="cart-price"> <?php echo $price;?></span></td>
													<!-- inclusive price starts here -->
													
													<td>
													<a href="updatecart.php?pid=<?php echo $pid;?>"><input type="button" class="input-cart-qty" value="-"><?php echo $qty?>
													
									                <a href="addtocartt.php?pid=<?php echo $pid;?>"><input type="button"  class="input-cart-qty" <?php if($qty >= 100) echo "disabled='disabled'"?> value="+" ></a>
								
													</td>
													<!--Sub total starts here -->
													<!--Sub total starts here -->
													<td ><span class="cart-total-price">₹<?php echo $tot;?></span></td>
													<td><a href="removecart.php?pid=<?php echo $pid;?>" class="cart-remove"><i class="mo-cross-rounde"></i></a></td>


												</tr>


																																				
											<?php }?>

								
											</tbody>
											<?php }?>
										</table>
									</fieldset>
								</div>
								<?php if(isset($tot_amount) && $tot_amount !=""){ ?>
								<div class="row">
									<div class="col-md-7 col-xs-12">
										<div class="row">
										
											
										</div>
									</div>
									<div class="col-md-5 col-xs-12">
										<div class="payment-details">
										<h3 class="title">Payment Details</h3>
											<div class="payment-wrapper">

												<div class="subtotal fix">
													<p class="float-left">Subtotal</p>
													<span class="float-right">₹ <?php echo $tot_amount?></span>
												</div>
												
												<div class="shipping fix">
													<p class="float-left">Shipping</p>
													<span class="float-right">₹ 70</span>
												</div>

												<div class="grandtotal fix">
													<p class="float-left">Grand Total</p>
													<span class="float-right">₹<?php echo 	$tot_amount+70?> </span>
												</div>
												<div class="procced-checkout text-center"><a href="<?php if(isset($_SESSION['user_id'])){?>shipping_detail.php<?php }else{ ?>user_login.php<?php }?>" class="checkout-btn">Procced to Checkout</a></div>
												
											</div>
										</div>
									</div>
								</div>
								<?php }?>
							</form>
						</div>
						
						
					</div>
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

<?php
include("footer.php"); 
?>