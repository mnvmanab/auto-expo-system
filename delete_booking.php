<!---delete booking--->

<?php
include("connection.php");
//error_reporting(0);

$booking_id=$_GET['booking_id'];
$car_number=$_GET['car_number'];
$quantity=$_GET['quantity'];
$available=$_GET['available'];


$available_new=$available+$quantity;



$query= "UPDATE `cars` SET `available` = '$available_new' WHERE `cars`.`car_id` = '$car_number'";
$data=mysqli_query($conn,$query);
	

		if($data)  
		{
			//$query2= "DELETE FROM `books` WHERE `books`.`booking_id` = '$booking_id'";
			$query2= "UPDATE `books` SET `status` = 'cancelled' WHERE `books`.`booking_id` = '$booking_id'";
			$data2=mysqli_query($conn,$query2);	
			if($data2)
			{
				echo "<script>alert('Booking Cancelled !!')</script>";
			
			?>
			<!--refresh karne k liye  --> 
			<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=http://localhost/demoproject/car booking/display_booking.php">
			
			<?php
				
			}				
			else
			{
			echo "<font color='red'>record not deleted </font>   <a href='display_booking.php'>Check list here</a>"; 
			}	   	
		}
		
		

?>

