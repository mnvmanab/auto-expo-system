<!--- delete brand--->

<?php
include("connection.php");
error_reporting(0);

$brand_id=$_GET['brand_id'];


$query= "DELETE FROM `brand` WHERE `brand`.`brand_id` = '$brand_id'";
$data=mysqli_query($conn,$query);
	
	//if($_GET['submit'])
	//{
					
		if($data)  
		{
			echo "<script>alert('Record deleted')</script>";
			
			?>
			<!--refresh karne k liye   -->
			<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=http://localhost/demoproject/car booking/display_brand.php">
			
			<?php
		}
		else
		{
			echo "<font color='red'>record not deleted </font>   <a href='display_brand.php'>Check list here</a>"; 
		}
						
		
	//else
	//{
	//echo "<font color='blue'>Click the button to update</font>";
	//}	

?>

