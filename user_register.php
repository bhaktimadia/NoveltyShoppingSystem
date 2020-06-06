<?php include("header.php"); ?>
<!-- Shop Page Banner
============================================ -->
<!--<div class="contact-banner">
	<img src="img/chemistry-of-cosmetics-hero.jpg" alt="" />
</div>-->
<!-- Shop Sideabr Product Container
============================================ -->

		<script type="text/javascript" src="jquery-1.10.2.js">
</script>
<script type="text/javascript" src="validate.js"></script>
<script>
		
	$("document").ready(function(){
	
		$("#submit").click(function(){
			var name,email,pass,phone,profile;
			//var fname1=getElementById("#fname").value;
			name = test_name("#name","#msgname");
			//alert(fname);
			email = test_email("#email","#msgemail");
			pass = test_e("#pass","#msgpass");
			phone = test_no("#phone","#msgphone");
			profile = test_file("#profile","#msgprofile");
			
			if(name == true && email == true && pass == true && phone == true && profile == true
				 )
			{
				return true;
				
			}
			else
			{
				//alert("hi......");
				return false;
			}
			
		});
	
	});
</script>
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
							<div class="cart-page-title text-center"><h1>Registration</h1></div>
							<div class="table-responsive">
									<fieldset>
			<div class="contact-form col-md-8" style="margin-left:200px">
				
				
				<form id="contact-form" method="post"  enctype="multipart/form-data" action="user_register_process.php" class="moon-form">
					<div class="input-box">
						<input type="text" name="name" id="name" placeholder="Name" class="form-control required"><span id="msgname"></span>
					</div>
					<div class="input-box">
						<input type="email" name="email" id="email" placeholder="Email" class="form-control required"><span id="msgemail"></span>
					</div>
					<div class="input-box">
						<input type="password" id="pass" name="password" placeholder="Enter Password" class="form-control required"><span id="msgpass"></span>
					</div>
					<div class="input-box">
						<input type="text" name="mobileno" id="phone" placeholder="Mobile No" class="form-control required"><span id="msgphone"></span>
					</div>
					<div class="input-box">
						<input type="date" name="dob" placeholder="Date Of Birth" class="form-control required">
					</div>
					<div class="input-box">
						<input type="file" name="profile" id="profile" placeholder="Select Your Profile" class="form-control required">
						
						<span id="msgprofile"></span>
					</div>
					
					<div class="input-box">
						<input type="submit" class="btn" id="submit" name="insert" value="Submit">
					</div>
				</form>
			</div>
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
	<?php include("footer.php"); ?>