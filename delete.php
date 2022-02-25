<!---delete car--->

<?php
include("connection.php");
error_reporting(0);

$car_id=$_GET['car_id'];


$query= "DELETE FROM `cars` WHERE `cars`.`car_id` = '$car_id'";
$data=mysqli_query($conn,$query);
	
	//if($_GET['submit'])
	//{
					
		if($data)  
		{
			echo "<script>alert('Record deleted')</script>";
			
			?>
			<!--refresh karne k liye   -->
			<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=http://localhost/demoproject/car booking/display.php">
			
			<?php
		}
		else
		{
			echo "<font color='red'>record not deleted </font>   <a href='display.php'>Check list here</a>"; 
		}
						
		
	//else
	//{
	//echo "<font color='blue'>Click the button to update</font>";
	//}	

?>

