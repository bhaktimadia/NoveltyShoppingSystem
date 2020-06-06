<?php 
include_once("connection.php");
if(isset($_GET['pid']) && $_GET['pid'] !="")
{
	
	if(isset($_SESSION['cart']) && is_array($_SESSION['cart']))
	{
		$max = count($_SESSION['cart']);
		
		if($max == 1)
		{
			unset($_SESSION['cart']);
		}
		else
		{
			for($i = 0; $i < $max; $i++)
			{
				if($_SESSION['cart'][$i]['productid'] == $_GET['pid'])
				{
					unset($_SESSION['cart'][$i]);
					break;
				}
			}
			$_SESSION['cart'] = array_values($_SESSION['cart']);
		}
		header("location:display_cart.php");
	}
	
}
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
					<div class="cart-page-tablist text-center">
						<ul>
							<li class="active"><a class="active" href="#shopping-cart" data-toggle="tab"><span class="number">1</span> <p>Shopping Cart</p></a></li>
							<li><a href="#check-out" data-toggle="tab"><span class="number">2</span> <p>Check Out</p></a></li>
							<li><a href="#order-complete" data-toggle="tab"><span class="number">3</span> <p>Order Complete</p></a></li>
						</ul>
					</div>
					<!-- Cart Page Tab Container -->
					<div class="tab-content">
						<!-- Cart Page Tab -->
						<div class="tab-pane active" id="shopping-cart">
							<div class="cart-page-title text-center"><h1>Shopping Cart</h1></div>
							<?php 
							
							print_r($_SESSION);
							if(isset($_SESSION['cart'])){?>

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
														<a href="#" class="cart-image"><img src="admin/image/<?php echo $image; ?>" alt="" /></a>
														<div class="cart-item-content fix">
															<h3 class="title"><a href="#"><?php echo $pname?></a></h3>
															<span>type: <strong><?php echo $type?></strong></span>
															
														</div>
													</div></td>
													<td><span class="cart-price">₹ <?php echo $price?></span></td>
													<!-- inclusive price starts here -->
													<td><input type="button" onClick="updatecart(<?php echo $pid?>)" value="-" />
								<?php echo $qty?>
									<input type="button" <?php if($qty >= 100) echo "disabled='disabled'"?> value="+" onClick="addtocart(<?php echo $pid?>)"/>
								
													</div></td>
													<!--Sub total starts here -->
													<!--Sub total starts here -->
														<td >
														<input type="button"  class="cart-remove" onClick="removecart(<?php echo $pid?>)"/>₹ <?php echo $tot?></td>
												</tr>

												<?php }?>

								
											</tbody>
											<?php }?>
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