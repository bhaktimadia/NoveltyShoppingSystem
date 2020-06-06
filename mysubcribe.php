
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
							<div class="cart-page-title text-center"><h1>My Subscribe Product</h1></div>
							<?php 
							
								
							
							
							?>

							<form action="#" id="cart-form">
								<div class="table-responsive">
									<fieldset>
										<table class="table-cart data-table table" id="shopping-cart-table">
											<thead>
												<tr>
													

													<th>Product Name</th>
														<th>Product Type</th>
														<th>Weight</th>
														<th>Product Price</th>
													<th>Day</th>
													<th>Date</th>
													<th>Action</th>
													
												</tr>
											</thead>
											<?php 
											//print_r($_SESSION);

								?>
											<tbody>
											
										
											
											
														<?php 
														
								$uid=$_SESSION['user_id'];
								$orderdquery=$con->query("select * from reminder S,product_details P where S.product_id=P.product_id and S.user_id='$uid'");
								
															while($orderd=$orderdquery->fetch_array()){
																
																?>
															<tr>
																<td><?php echo $orderd['product_name'];?></td>
																<td><?php echo $orderd['product_type'];?></td>
																<td><?php echo $orderd['product_quantity'];?></td>
																<td><?php echo $orderd['product_prise'];?></td>
																<td><?php echo $orderd['noofday'];?></td>
																<td><?php echo $orderd['rdate'];?></td>
																
																
																<td><a href="reminder_process.php?sid=<?php echo $orderd['reminder_id']; ?>">UNSubscribe</a></td>
															</tr>
															<?php }?>
														
												

														

								
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
