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
											
							<div class="cart-page-title text-center"><h1>Reminder Product Detail</h1></div>
							<?php 
							
								
							?>

								
			<fieldset>		
			<div class="contact-form col-md-4" style="margin-left:400px">
			<font color="red"><?php if(isset($_SESSION['error']) && $_SESSION['error']!=""){echo $_SESSION['error'];unset($_SESSION['error']);} ?></font>
				<h2> </h2>
				
				<form id="" method="post" action="reminder_process.php" class="moon-form">
					
					<div class="input-box">
						<label>Number Of Day:</label>
						<input type="text" name="txtday" placeholder="Enter Day" class="form-control " ><span id="msgemail"></span>
						<input type="hidden" name="txtpid" value="<?php echo $_GET['pid']; ?>" class="form-control " >
						
					</div>
					
					
					<div class="input-box">
						<input type="submit" id="" class="btn" name="btnsubmit" value="Submit">
					
					
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