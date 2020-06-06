<?php

include("header.php");

if(isset($_POST['submit']))
{
	$name=$_POST['txtname'];
	$email=$_POST['txtemail'];
	$mono=$_POST['txtmono'];
	$address=$_POST['address'];
	$uid=$_SESSION['user_id'];
	
	$con->query("insert into shipping_address(user_id,shipping_person_name,mobile_no,email,address) values('$uid','$name','$mono','$email','$address')");
	
	 $_SESSION['aid']=mysqli_insert_id($con);
	echo mysqli_error($con);

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
															<td><p class="cart-total-title text-left">Cart Subtotal <br />Shipping & Handling</p></td>
															<td><span class="cart-total text-right">₹ <?php echo $tot_amount?></span><p class="shipping-charge text-right">₹ 70</p></td>
														</tr>
														
														<tr>
															<td><h3 class="grand-total-title text-left">Grand Total</h3></td>
															<td><span class="grand-total text-right">₹<?php echo 	$tot_amount+70?></span></td>
														</tr>
													</tfoot>
												</table>
											</fieldset>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-xs-12">
									<div class="coustomer-details">
										<div class="order-com-title"><h1>Customer Details</h1></div>
										<div class="content">
											<ul>
												<li><span>Name :</span><?php echo $name; ?></li>
												<li><span>Email :</span><?php echo $email; ?></li>
												<li><span>Mobile No :</span><?php echo $mono; ?></li>
											</ul>
										</div>
									</div>
									<div class="billing-address">
										<div class="order-com-title"><h1> Address</h1></div>
										<div class="content">
											
											<p>
											<?php echo $address; ?></p>
											<br>
											<br>
											<br>
										</div>
										<form action="checkout_process.php" method="post">
										<div class="content">
										<h3><b>Select Paymet Option</b></h3><br>
										<input type="radio" name="payment" value="cash" required>&nbsp;&nbsp;COD&nbsp;&nbsp;
										<input type="radio" name="payment" value="online" required>&nbsp;&nbsp;Pay to Paypal &nbsp;&nbsp;
										</div>
										
									</div>
									
									<button type="submit" class="btn btn-success"> Place Order</button>
								</div>
								</form>
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
<?php }else{
	
header("location:index.php");
}?>

<?php
include("footer.php"); 
?>