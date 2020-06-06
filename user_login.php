<?php include("header.php"); ?>

			<script type="text/javascript" src="jquery-1.10.2.js">
</script>
<script type="text/javascript" src="validate.js"></script>
<script>
		
	$("document").ready(function(){
	
		$("#submit").click(function(){
			
			var email,pass;
			
			email = test_email("#temail","#msgemail");
			
			pass = test_e("#tpass","#msgpass");
			
			
			if(email == true && pass == true)
			{
				return true;
				
			}
			else
			{
				
				return false;
			}
			
		});
	
	});
</script>
<div class="contact-page pages">
	<div class="container">
		<div class="row" >
	
				<div class="cart-page-container fix">
											
							<div class="cart-page-title text-center"><h1>Log In</h1></div>
							<?php 
							
								
							?>

								
			<fieldset>		
			<div class="contact-form col-md-4" style="margin-left:400px">
			<font color="red"><?php if(isset($_SESSION['error']) && $_SESSION['error']!=""){echo $_SESSION['error'];unset($_SESSION['error']);} ?></font>
				<h2> </h2>
				
				<form id="" method="post" action="user_login_process.php" class="moon-form">
					
					<div class="input-box">
						<label>Email Id:</label>
						<input type="email" name="email" id="temail" placeholder="xyz@gmail.com" class="form-control " ><span id="msgemail"></span>
						
					</div>
					<div class="input-box">
					<label>Password:</label>
						<input type="password" name="password" id="tpass" placeholder="Enter Password" class="form-control required" ><span id="msgpass"></span>
						
					</div>
					
					<div class="input-box">
						<input type="submit" id="submit" class="btn" name="insert" value="login">
					
					<div class="forgot-password pull-right">
					  <a href="forgot.php">Forgot password?</a>
					</div>
					</div>
				</form>
			</div>
			</fieldset>
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
