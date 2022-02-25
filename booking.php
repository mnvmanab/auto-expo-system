<?php
include("connection.php");
//error_reporting(0);

$_GET['car_id'];
$_GET['available'];
?>

<html>

<head>
<title>Booking details</title>
</head>
<style>

html, body, .grid-container { height: 100%; margin: 0; }

.grid-container {
  display: grid;
  grid-template-columns: 1fr;
  grid-template-rows: 0.3fr 1.7fr;
  gap: 0px 0px;
  grid-template-areas:
    "top"
    "main";
}

.top { 
		grid-area: top;
	//backgroun:yellow;
		padding-top: 1.3%;
		padding-lef: 40px;
}


body{
    font-family: Helvetica;
    -webkit-font-smoothing: antialiased;
    //backgroun: rgba( 71, 147, 227, 1);
    //backgroun: wheat;
}
h2{
    text-align: center;
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: white;
    padding: 30px 0;
}


.top .logo {
			display: block;
			border-bottom: 0;
			color: gray;
			font-weight: 900;
			letter-spacing: 0.35em;
			margin: 0 0 1.5em 8em;
			text-decoration: none;
			text-transform: uppercase;
			display: inline-block;
		}

			.top .logo > * {
				display: inline-block;
				vertical-align: middle;
			}

			.top .logo .symbol {
				margin-right: 0.65em;
			}

				.top .logo .symbol img {
					display: block;
					width: 2em;
					height: 2em;
				}
				
.top .inner{
	width:50%;
	//backgroun: red;
}	

.top .inner2{
	background: #324960;
	padding-left:70%;
	padding-top:1%;
	padding-bottom:1%;
}

.links{
  //background-clr: pink;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

.links{
  background-color: #4FC3A1;
}

.main{
	//backgroun-color:pink;
}
.main .container{
	//backgroun-color:orange;
	padding-left:35%;
}

    
input[type=text], textarea {
    width: 25%;
    padding: 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	box-shadow: 2px 5px #888888;
}    
    #date {
    width: 25%;
    padding: 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}    
    
input[type=submit] {
    width: 20%;
    background-color: #4FC3A1;
    color: white;
    padding: 12px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	margin-left:13%;

}   
.topic{
	padding-left:10%;
	padding-top:2%;
	font-family: Garamond;
}
	
b{
	font-family: Garamond;
	font-size:19;
}
select{
	width: 20%;
    background-color: #324960;
    color: white;
    padding: 12px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	
}
	

</style>

<body>

<div class="grid-container">
		<div class=top>
				<div class="inner">

						<!-- Logo -->
					<a href="index.php" class="logo">
						<span class="fa fa-car"></span> <span class="title">Car Dealer Website</span>
					</a>
					
					
				</div>
				
				<div class="inner2">

						<b><a class="links" href='display.php'>Check Car List</a></b>
				</div>


		</div>
	
		<div class="main">
		<form action="" method="POST" enctype="multipart/form-data">
			<div class="container">
			<h1 class="topic"><u>BOOKING</u></h1>
			
			
			<!--
			<b>Booking ID :</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="booking_id" required><br><br>
			-->
						
			
			<b>Quantity :</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="quantity" required><br><br>
			
	
			
			
			
			<!----------------dropdown customer-->	
	  <label for="cars"><b>Choose customer:</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  
		<?php
		
		$query3="SELECT * FROM customers";
		$data3 = mysqli_query($conn,$query3);
		$rowcount3= mysqli_num_rows($data3);
		?>
		
		<select class="drop" name="customer_PAN" required>
		<option value="">select customer's PAN</option>
		<?php
		for($i=1;$i<=$rowcount3;$i++)
		{
			
			$row3=mysqli_fetch_assoc($data3);
		?>
		<option value="<?php echo $row3["PAN"] ?>"><?php echo $row3["PAN"] ?></option>
		
		<?php
		}
		?>

	  </select><br><br>
			
	 

	  <br><br>

			<input type="submit" name="submit" value="Submit">
					
			</div>
		</form>
	  </div>
  
  <div class="main2">
		<?php
		if(isset($_POST['submit']))
		{
			$car_id =$_GET['car_id'];
			$price =$_GET['price'];
			
			$booking_id=uniqid("B_");
			$quantity=($_POST['quantity']);
			
			$date=  date("d/m/Y");//todays date
			
			date_default_timezone_set('Asia/Kolkata');
			$time = date('h:i:s');
		
			
			$PAN=($_POST['customer_PAN']);			

			
			if($_GET['available']>=$quantity)
			{
				$available=$_GET['available']-$quantity;
				
				//if($car_id!="" && $quantity!="" && $booking_id!=""  && $PAN!="" )
				if($car_id!="" && $quantity!="" && $PAN!="" )
				{
						
					$query="INSERT INTO `books` (`customer_PAN`,`car_number`,`date`,`booking_id`,`quantity`,`time`,`status`) VALUES ('$PAN','$car_id','$date','$booking_id','$quantity','$time','booked')";	

					$data=mysqli_query($conn,$query);
					
					if($data)  
					{
					//echo "<script>alert('Registered Successfully')</script>";
					
					
					
		?>
			<!--refresh karne k liye  
			<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=http://localhost/demoproject/car booking/bill.php?">
			--> 
						
				<?php
				
				
				
						$query_new= "UPDATE `cars` SET `available` = '$available' WHERE `cars`.`car_id` = '$car_id'";
						$data_new=mysqli_query($conn,$query_new);
						if(!$data_new)  
						{
								echo "<script>alert('unexpected error occured')</script>";
												
				?>
								<!--refresh karne k liye   -->
								<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=http://localhost/demoproject/car booking/index.php">
												
				<?php
			
						}
							
							if($quantity>0)
							{
							$total_price= $quantity*$price;
							
							
								
							?>
							<center>
							<?php  
							echo "your grand total is: Rs.";echo $total_price;
							echo "<br><br>";
							
							//$query5= "SELECT booking_id FROM books WHERE `car_number` = '$car_id' & `customer_PAN` = '$PAN'";
							//$data5=mysqli_query($conn,$query5);
							//$result5=mysqli_fetch_assoc($data5)
							
							?>
							<h2>YOUR BOOKING</h2>
							
							 <br><table border="1" cellpadding="12">
						   <tr>
							   <td>BOOKING ID</td>
							   <td>PAN NUMBER</td>
							   <td>CAR ID</td>
							   <td>DATE</td>
							   <td>TIME</td>
							   <td>QUANTITY</td>
							   
						   </tr>  
						  <tr>
								
								 <td><?php echo $booking_id; ?></td>
								 <td><?php echo $PAN; ?></td>
								 <td><?php  echo $car_id; ?></td>
								<td><?php  echo $date ?></td>
								<td><?php  echo $time ?></td>
								<td><?php  echo $quantity ?></td>
								</tr></table>
								
								<br><br><br>
								<h2><a href="success.php" >Next Page</a></h2>
								
							<?php  
							}
							else
							{
								echo "<b>Please insert valid quantity.</b>";
							}
								
								
					
			
					}
					else
					{
						die('Insert Error'.mysqli_error($conn));
					}
					
				}
				else
				{
					echo "<font class='msg' color='red'>all fields required</font>";
					
		
				}
				
			}
			else
			{
					echo "<script>alert('OUT OF STOCK !! ')</script>";
					
						?>
						<!--refresh karne k liye   -->
						<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=http://localhost/demoproject/car booking/index.php">
						
						<?php
				
			}
		}	
				
	
			?>

</div>
</div>
</body>
</html>