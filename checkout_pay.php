
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
						<div class="tab-pane" id="order-complete">
							<div class="row">
								<div class="col-md-6 col-xs-12">
									<div class="order-details order-details-complete">
										<div class="cart-page-title"><h1>Order Details</h1></div>
										<div class="table-responsive">
											<fieldset>
												<table class="order-pro-table table" id="order-pro-table-2">
													<thead>
														<tr>
															<th><p class="product text-left">Product</p></th>
															<th><p class="total text-right">Total</p></th>
														</tr>
													</thead>
													<tbody>
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
														<tr>
															<td><h3 class="title text-left"><?php echo $pname; ?></h3></td>
															<td ><span class="total-price text-right"><?php echo $tot; ?></span></td>
														</tr>
														<?php } ?>
													</tbody>
													<tfoot>
														
														<tr>
															<td><h3 class="grand-total-title text-left">Grand Total</h3></td>
															<td><span class="grand-total text-right"><?php echo $tot_amount; ?></span></td>
														</tr>
													</tfoot>
												</table>
											</fieldset>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-xs-12">
									
								<?php 
									$paypal_url='https://www.sandbox.paypal.com/cgi-bin/webscr'; // Test Paypal API URL
									$paypal_id='parth.savani08-facilitator1@gmail.com'; // Business email ID
									?>
								<form action='<?php echo $paypal_url; ?>' method='post' name='form_1'>
								<input type='hidden' name='business' value='<?php echo $paypal_id; ?>'/>
								<input type='hidden' name='cmd' value='_xclick'/>
								<input type='hidden' name='item_name' value='<?php echo $pname; ?>'/>
								<input type='hidden' name='item_number' value='<?php echo $qty; ?>'/>
								<input type='hidden' name='amount' value='<?php echo $tot_amount ; ?>'/></br>
								<!-- <input type='hidden' name='no_shipping' value='1'> -->
								<input type='hidden' name='currency_code' value='INR'/></br></br>
								<!--<input type="hidden" name="return" value="http://localhost/Online_Sports_Equipments/index.php">
								<input type='hidden' name='cancel_return' value='http://localhost/Online_Sports_Equipments/index.php'> -->
								<input type='hidden' name='return' value='index.php'> 
								<button type="submit" id="placeorder" style="float:right;cursor:poiinter;" class="btn btn-success" name="submit"/>Pay</button>
				
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
<style>
body {
    background-color:#FFCABA;
}
</style>

<?php
include("footer.php"); 
?>
