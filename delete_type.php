<!---delete fuel type--->

<?php
include("connection.php");
error_reporting(0);

$type_id=$_GET['type_id'];


$query= "DELETE FROM `type` WHERE `type`.`type_id` = '$type_id'";
$data=mysqli_query($conn,$query);
	
	
		if($data)  
		{
			echo "<script>alert('Record deleted')</script>";
			
			?>
			<!--refresh karne k liye   -->
			<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=http://localhost/demoproject/car booking/display_type.php">
			
			<?php
		}
		else
		{
			echo "<font color='red'>record not deleted </font>   <a href='display_type.php'>Check list here</a>"; 
		}
						

?>

