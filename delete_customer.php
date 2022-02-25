<!--- delete customer --->

<?php
include("connection.php");
error_reporting(0);

$PAN=$_GET['PAN_number'];


$query= "DELETE FROM `customers` WHERE `customers`.`PAN` = '$PAN'";
$data=mysqli_query($conn,$query);
	

		if($data)  
		{
			echo "<script>alert('Record deleted')</script>";
			
			?>
			<!--refresh karne k liye   -->
			<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=http://localhost/demoproject/car booking/display_customer.php">
			
			<?php
		}
		else
		{
			echo "<font color='red'>record not deleted </font>   <a href='display_customer.php'>Check list here</a>"; 
		}
		

?>

