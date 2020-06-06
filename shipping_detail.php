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
					
					
						<!-- Cart Page Tab -->
						<div class="tab-pane" id="check-out">
							<div class="cart-page-title cart-page-title-2 text-center"><h1>Checkout</h1><p>Personal Information and Payment</p></div>
							<div class="row">
								<div class="col-md-6 col-xs-12">
									<div class="billing-details">
										<div class="cart-page-title"><h1>Billing Details</h1></div>
										<div class="checkout-form">
											<form action="<?php if(isset($_SESSION['user_id'])){?>checkout.php<?php }else{ ?>user_login.php<?php }?>" method="post" id="billing-details" class="moon-form">
												<div class="input-box"><input type="text" name="txtname" placeholder="Frist Name *" /></div>
												
												
												<div class="input-box"><input type="text" name="txtemail" placeholder="Email Address *" /></div>
												<div class="input-box"><input type="text" name="txtmono" placeholder="Phone *" /></div>
												
												
												<div class="input-box"><textarea name="address" rows="4" placeholder="Address *"></textarea></div>
												
												<div class="input-box"><input type="submit" name="submit" value="submit" /></div>
											</form>
										</div>
									</div>
								</div>
							</div>
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