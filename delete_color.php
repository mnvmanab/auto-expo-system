<!---delete color--->

<?php
include("connection.php");
//error_reporting(0);

$color_id=$_GET['color_id'];


$query= "DELETE FROM `color` WHERE `color`.`color_id` = '$color_id'";
$data=mysqli_query($conn,$query);
	

		if($data)  
		{
			echo "<script>alert('Record deleted')</script>";
			
			?>
			<!--refresh karne k liye   -->
			<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=http://localhost/demoproject/car booking/display_color.php">
			
			<?php
		}
		else
		{
			echo "<font color='red'>record not deleted </font>   <a href='display_color.php'>Check list here</a>"; 
		}
		

?>

