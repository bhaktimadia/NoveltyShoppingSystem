
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
							<div class="shop-page-banner">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div align="center"><h2>MY PROFILE</h2>
				</div>
		</div>
	</div>
</div>

							<form action="#" id="cart-form">
								<div class="table-responsive">
									<fieldset>
										
											<?php 
											//print_r($_SESSION);

								?>
											
											
											<?php 
											$user=$_SESSION['user_id'];
											$queryuser=$con->query("select * from user_side where user_id='$user'");
												while($userrow=$queryuser->fetch_array()){
													?>
													
												<img src="image/<?php echo $userrow['profile']; ?>" width="150px"><br><br>
													<strong>Name:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $userrow['name']; ?><br><br>
													<strong>DOB:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $userrow['dob']; ?><br><br>
												
													<strong>Email:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $userrow['email']; ?><br><br>
												
													<strong>Mobile No:</strong>&nbsp;&nbsp;<?php echo $userrow['mobileno']; ?><br>
												<div class="col-sm-12">
													<div align="right"><a href="editprofile.php">Change Profile</a></div>
												</div>
		
												<?php } ?>

														

								
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
