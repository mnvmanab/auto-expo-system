<!---delete dealer--->

<?php
include("connection.php");
error_reporting(0);

$dealer_id=$_GET['dealer_id'];


$query= "DELETE FROM `dealer` WHERE `dealer`.`dealer_id` = '$dealer_id'";
$data=mysqli_query($conn,$query);
	

		if($data)  
		{
			echo "<script>alert('Record deleted')</script>";
			
			?>
			<!--refresh karne k liye   -->
			<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=http://localhost/demoproject/car booking/display_dealer.php">
			
			<?php
		}
		else
		{
			echo "<font color='red'>record not deleted </font>   <a href='display_dealer.php'>Check list here</a>"; 
		}
		

?>

