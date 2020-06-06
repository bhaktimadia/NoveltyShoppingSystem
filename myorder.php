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
							<div class="cart-page-title text-center"><h1>My Order</h1></div>
							<?php 
							
								$uid=$_SESSION['user_id'];
								$orderquery=$con->query("select * from order_table OD,user_side UD,shipping_address SS where OD.user_id=UD.user_id and OD.shipping_id=SS.shipping_id and UD.user_id='$uid'");
								
								
							
							
							?>

							<form action="#" id="cart-form">
								<div class="table-responsive">
									<fieldset>
										<table class="table-cart data-table table" id="shopping-cart-table">
											<thead>
												<tr>
													

													<th>Name</th>
													<th>Email</th>
													<th>Address</th>
													<th>Date</th>
													<th>Product</th>
													
												</tr>
											</thead>
											<?php 
											//print_r($_SESSION);

								?>
											<tbody>
											
											<?php 
												while($orderr=$orderquery->fetch_array()){
													?>
												<tr>
												
													<td>	
												
													<?php echo $orderr['shipping_person_name']; ?></td>
													<td>	
												
													<?php echo $orderr['email']; ?></td>
													<td>	
													
												
													<?php echo $orderr['address']; ?></td>
													<td>	
													<?php echo $orderr['order_date']; ?></td>
													
													<td>
														<table class="table-cart data-table table" id="shopping-cart-table">
													<thead>
														<tr>
													

															<th>Name</th>
															<th>Quantity</th>
															<th>Price</th>
															<th>Total</th>
															<th>Reminder</th>
															
															
														</tr>
													</thead>
														<tbody>
											
														<?php 
														$k="";
														$orderdquery=$con->query("select * from order_table OT,order_detail OD where OD.order_id=OT.order_id");
															while($orderd=$orderdquery->fetch_array()){
											if($orderd['order_id']==$orderr['order_id'] && $k!=$orderd['rdid']){
												$k=$orderd['rdid'];
												
																?>
															<tr>
																<td><?php echo $orderd['product_name'];?></td>
																<td><?php echo $orderd['product_quantity'];?></td>
																<td><?php echo $orderd['product_price'];?></td>
																<td><?php echo $orderd['product_price']*$orderd['product_quantity'];?></td>
																<td>
																<?php if($orderd['status']==1){echo "Pending";}
																if($orderd['status']==2 && $orderd['rid']!=1)
																{?>
																	<a href="reminder.php?pid=<?php echo $orderd['product_id']; ?>">Reminder</a>
																	<a href="return.php?oid=<?php echo $orderd['order_detail_id']; ?>">Return</a>
															<?php 	} ?>
																
																
																
																</td>
															</tr>
															<?php }}?>
														</tbody>
														</table>
													
													<td>
													

												
												<?php } ?>

												</tr>		

								
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