
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
							<div class="cart-page-title text-center"><h1>My Profile</h1></div>
							<?php 
							
								
							?>

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
											
													<div class="contact-form col-md-8">
				
				
																<form id="contact-form" method="post" action="profile_process.php" enctype="multipart/form-data" class="moon-form">
																	<div class="input-box">
																		<input type="text" name="name" id="name" value="<?php echo $userrow['name']; ?>" placeholder="Name" class="form-control required"><span id="msgname"></span>
																	</div>
																	<div class="input-box">
																		<input type="email" name="email" id="email" value="<?php echo $userrow['email']; ?>" placeholder="Email" class="form-control required"><span id="msgemail"></span>
																	</div>
																	
																	<div class="input-box">
																		<input type="password" name="password"  value="<?php echo $userrow['password']; ?>" placeholder="Email" class="form-control required">
																	</div>
																	
																	<div class="input-box">
																		<input type="text" name="mobileno" id="phone" value="<?php echo $userrow['mobileno']; ?>" placeholder="Mobile No" class="form-control required"><span id="msgphone"></span>
																	</div>
																	<div class="input-box">
																		<input type="date" name="dob"  value="<?php echo $userrow['dob']; ?>" placeholder="Date Of Birth" class="form-control required">
																	</div>
																	<div class="input-box">
																		<input type="file" name="profile" id="profile"  placeholder="Select Your Profile" class="form-control required"><span id="msgprofile"></span>
																		<img src="image/<?php echo $userrow['profile']; ?>" width="100px">
																	</div>
																	
																	<div class="input-box">
																		<input type="submit" class="btn" id="submit" name="editprofile" value="Submit">
																	</div>
																</form>
															</div>
													
													
													
													
												<?php } ?>
										</fieldset>
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
