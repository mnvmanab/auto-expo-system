<!---insert car--->

<?php
include("connection.php");
//error_reporting(0);


?>

<html>

<head>
<title>Insert car details</title>
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
			<h1 class="topic"><u>INSERT CARS</u></h1>
			
			
			
			<b>Car ID :</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="car_id" required><br><br>
			
			
			<b>Model :</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="model" required><br><br>
			
			
			<b>Price :</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="price" required><br><br>
					
			
			<b>Available :</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="available" required><br><br>
			
			
			<b>Engine :</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="engine" required><br><br>
			
			
			<b>Upload File :</b>&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="uploadfile" value=""/><br><br><br>
			
			<!----------------dropdown color-->	
	  <label for="cars"><b>Choose color:</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  
		<?php
		
		$query3="SELECT * FROM color";
		$data3 = mysqli_query($conn,$query3);
		$rowcount3= mysqli_num_rows($data3);
		?>
		
		<select class="drop" name="color name">
		<option value="">select any one</option>
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
	  <label for="cars"><b>Choose brand:</b></label>&nbsp;&nbsp;&nbsp;
	  
		<?php
		
		$query="SELECT * FROM brand";
		$data = mysqli_query($conn,$query);
		$rowcount= mysqli_num_rows($data);
		?>
		
		<select name="brand name">
		<option value="">select any one</option>
		<?php
		for($i=1;$i<=$rowcount;$i++)
		{
			
			$row=mysqli_fetch_assoc($data);
		?>
		<option value="<?php echo $row["brand_id"] ?>"><?php echo $row["brand_name"] ?></option>
		
		<?php
		}
		?>

	  </select><br><br>
	  
	  
	  <!----------------dropdown type-->	
	  <label for="cars"><b>Choose type:</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  
		<?php
		
		$query1="SELECT * FROM type";
		$data1 = mysqli_query($conn,$query1);
		$rowcount1= mysqli_num_rows($data1);
		?>
		
		<select name="types">
		<option value="">select any one</option>
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
	  <label for="cars"><b>Choose dealer:</b></label>&nbsp;&nbsp;&nbsp;
	  
		<?php
		
		$query2="SELECT * FROM dealer";
		$data2 = mysqli_query($conn,$query2);
		$rowcount2= mysqli_num_rows($data2);
		?>
		
		<select name="dealer name">
		<option value="">select any one</option>
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
	 

	  <br><br>

			<input type="submit" name="submit" value="Submit">
					
			</div>
		</form>
	  </div>
  
  <div class="main2">
			<?php
			if(isset($_POST['submit']))
			{
				
			$car_id=$_POST['car_id'];
			$model=($_POST['model']);
			$price=($_POST['price']);
			
			$available=($_POST['available']);
			$engine=($_POST['engine']);
			
			$filename= $_FILES["uploadfile"]["name"];
			$tempname= $_FILES["uploadfile"]["tmp_name"];   //location of file

			$folder="images/".$filename;

			move_uploaded_file($tempname,$folder);
			//echo "<img src='$folder' height='100' width='100'/>";
			
			$color_name=$row3["color_id"];				
			$brand_name=$row["brand_id"];
			$type_name=$row1["type_id"];
			$dealer_name=$row2["dealer_id"];
				
			
				if($car_id!="" && $model!="" && $price!=""  && $filename!="" && $brand_name!="" && $type_name!="" && $dealer_name!="" && $color_name!=""  && $available!=""  && $engine!="")
				{
					
					
					
					$query="INSERT INTO `cars` (`car_id`,`model`,`price`,`picsource`,`brand`,`type`,`dealer`,`color`,`available`,`engine`) VALUES ('$car_id','$model','$price','$folder','$brand_name','$type_name','$dealer_name','$color_name','$available','$engine')";

				
				
					$data=mysqli_query($conn,$query);
					
					if($data)  
					{
					echo "<script>alert('Registered Successfully')</script>";
					//echo "<font class='msg' color='green'>record inserted succesfully.</font>   <a href='display.php'>Check the list here</a>";
					
					
								?>
						<!--refresh karne k liye   -->
						<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=http://localhost/demoproject/car booking/registration.php">
						
						<?php
					
			
				?>
					
			
					<?php
					}
					else
					{
						//die('Insert Error'.mysqli_error($conn));
						echo "<script>alert('Already Registered !!! ')</script>";
					}
					
					
				}
				else
				{
					echo "<font class='msg' color='red'>all fields required</font>";
					
		
				}
			}	
				
	
			?>

</div>
</div>
</body>




</html>
