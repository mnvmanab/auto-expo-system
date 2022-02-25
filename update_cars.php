
<?php
include("connection.php");
//error_reporting(0);

?>

<html>

<head>
<title>update</title>
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
	<form action="" method="POST">
		<div class="container">
		<h1 class="topic"><u>UPDATE CARS</u></h1>
		
		
		<b>Car ID :</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="car_id" value="<?php echo $_GET['car_id'];?>" disabled><br><br>
		
		<b>Model :</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="model" value="<?php echo $_GET['model'];?>" required><br><br>
		
		<b>Price :</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="price" value="<?php echo $_GET['price'];?>" required><br><br>
		
		
		<b>Available :</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="available" value="<?php echo $_GET['available'];?>" required><br><br>
		
		<b>Engine :</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="engine" value="<?php echo $_GET['engine'];?>" required><br><br>
		
		<!----------------dropdown color-->	
	<label for="cars">Choose color:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
    <?php
	
	$query3="SELECT * FROM color";
	$data3 = mysqli_query($conn,$query3);
	$rowcount3= mysqli_num_rows($data3);
	?>
	
	<select name="color_id">
	<option value=""><?php echo $_GET['color'] ?></option>
	<option value="" disabled>--select any one--</option>
	<?php
	for($i=1;$i<=$rowcount3;$i++)
	{
		
		$row3=mysqli_fetch_assoc($data3);
	?>
	<option value="<?php echo $row3["color_id"] ?>"><?php echo $row3["color_name"] ?></option>
	
	<?php
	}
	?>

  </select><br><br>
		
		<!----------------dropdown brand-->	
		<label for="cars">Choose brand:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  
		<?php
		
		$query="SELECT * FROM brand";
		$data = mysqli_query($conn,$query);
		$rowcount= mysqli_num_rows($data);
		?>
		
		<select name="brand_id">
		<option value=""><?php echo $_GET['brand_name'] ?></option>
		<option value="" disabled>--select any one--</option>
		<?php
		for($i=1;$i<=$rowcount;$i++)
		{
			
			$row=mysqli_fetch_assoc($data);
		?>
		<option value="<?php echo $row["brand_id"]; ?>"><?php echo $row["brand_name"]; ?></option>
		
		<?php
		}
		
		?>

	  </select><br><br>
	  
	  <!----------------dropdown type-->	
  <label for="cars">Choose type:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
    <?php
	
	$query1="SELECT * FROM type";
	$data1 = mysqli_query($conn,$query1);
	$rowcount1= mysqli_num_rows($data1);
	?>
	
	<select name="type_id">
	<option value=""><?php echo $_GET['type_name'] ?></option>
	<option value="" disabled>--select any one--</option>
	<?php
	for($i=1;$i<=$rowcount1;$i++)
	{
		
		$row1=mysqli_fetch_assoc($data1);
	?>
	<option value="<?php echo $row1["type_id"] ?>"><?php echo $row1["type_name"] ?></option>
	
	<?php
	}
	?>
  </select><br><br>
  
  <!----------------dropdown dealer-->	
  <label for="cars">Choose dealer:</label>&nbsp;&nbsp;&nbsp;&nbsp;
  
    <?php
	
	$query2="SELECT * FROM dealer";
	$data2 = mysqli_query($conn,$query2);
	$rowcount2= mysqli_num_rows($data2);
	?>
	
	<select name="dealer_id">
	<option value=""><?php echo $_GET['dealer_name'] ?></option>
	<option value="" disabled>--select any one--</option>
	<?php
	for($i=1;$i<=$rowcount2;$i++)
	{
		
		$row2=mysqli_fetch_assoc($data2);
	?>
	<option value="<?php echo $row2["dealer_id"] ?>"><?php echo $row2["dealer_name"] ?></option>
	
	<?php
	}
	
	?>

  </select><br><br>
		
		
		<input type="submit" name="submit" value="Update">
		
		</div>
	</form>
  </div>
  
  <div class="main2">
	<?php
	
if(isset($_POST['submit']))
{
	$car_id=$_GET['car_id'];			
	$model=$_POST['model'];
	$price=$_POST['price'];
			
	$available=$_POST['available'];
	$engine=$_POST['engine'];
	
	//----for color name
	if($_POST['color_id']==NULL)		
	{
		$_POST['color_id']=$_GET['color_ID'];	
	}
	$color_id=$_POST['color_id'];
	
	//----for brand name
		
	if($_POST['brand_id']==NULL)		
	{
		$_POST['brand_id']=$_GET['brand_ID'];	
	}
	$brand_id=$_POST['brand_id'];
	
	//----for type name
		
	if($_POST['type_id']==NULL)		
	{
		$_POST['type_id']=$_GET['type_ID'];	
	}
	$type_id=$_POST['type_id'];
	
	//----for dealer name
		
	if($_POST['dealer_id']==NULL)		
	{
		$_POST['dealer_id']=$_GET['dealer_ID'];	
	}
	$dealer_id=$_POST['dealer_id'];
	
	
	$query_new= "UPDATE `cars` SET `model` = '$model', `price` = '$price',`color` = '$color_id',`available` = '$available',`engine` = '$engine', `brand` = '$brand_id', `type` = '$type_id', `dealer` = '$dealer_id' WHERE `cars`.`car_id` = '$car_id'";

	
	$data_new=mysqli_query($conn,$query_new);
 
	if($data_new)  
	{
		echo "<script>alert('Updated Successfully')</script>";
					//echo "<font class='msg' color='green'>record inserted succesfully.</font>   <a href='display.php'>Check the list here</a>";
					
					
								?>
						<!--refresh karne k liye   -->
						<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=http://localhost/demoproject/car booking/display.php">
						
						<?php
					
			
				
	}
	else
	{
		echo "<font color='red'>record not updated </font>   <a href='display.php'>Check updated list here</a>"; 
	}
	
	
	//echo $_GET['car_id'];
	//echo "<font color='red'>  -->  </font>";
	//echo $_POST['car_id'];
	
	//echo $dealer_name;
	
}
else
{
	echo "<font color='blue'>Click the button to update</font>";

}	
			
?>		

</div>
</div>
</body>

</html>
