<?php
include("connection.php");
//error_reporting(0);

$_GET['booking_id'];
$_GET['PAN'];
$_GET['car_id'];
$_GET['date'];
$_GET['quantity'];
$_GET['total_price'];
?>



<center><h2>YOUR BOOKING</h2>
<?php
				echo "your grand total is: Rs.";echo $_GET['total_price'];
				echo "<br><br><br><br>";
?>
							
							 <br><table border="1" cellpadding="12">
						   <tr>
							   <td>BOOKING ID</td>
							   <td>PAN NUMBER</td>
							   <td>CAR ID</td>
							   <td>DATE</td>
							   <td>QUANTITY</td>
							   
						   </tr>  
						  <tr>
								
								 <td><?php echo $_GET['booking_id']; ?></td>
								 <td><?php echo $_GET['PAN']; ?></td>
								 <td><?php  echo $_GET['car_id']; ?></td>
								<td><?php  echo $_GET['date']; ?></td>
								<td><?php  echo $_GET['quantity']; ?></td>
								</tr></table>
								
								<br><br><br>
								<h2><a href="success.php" >Next Page</a></h2>