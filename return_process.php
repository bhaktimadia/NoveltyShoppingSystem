<?php
include("connection.php");

if(isset($_POST['btnsubmit']) && $_POST['btnsubmit']!="")
{
		$reason=$_POST['txtr'];
		
		$oid=$_POST['txtoid'];
	
		
		
			if($con->query("update order_detail set rid='1',reason='$reason' where order_detail_id='$oid'"))
			{
			
				header("location:myorder.php");
			}
			else
			{
				header("location:myorder.php");
			}
			
	
		
}

?>