<!---update customer--->

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

						<b><a class="links" href='display_customer.php'>Check Customer List</a></b>
				</div>


		</div>

  <div class="main">
	<form action="" method="POST">
		<div class="container">
		<h1 class="topic"><u>UPDATE CUSTOMER</u></h1>
		
		<b>Customer's PAN : </b>&nbsp;&nbsp;&nbsp;<input type="text" name="PAN"  value="<?php echo $_GET['PAN_number'];?>" disabled><br><br>
		
		<b>First Name : </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="fname" value="<?php echo $_GET['first_name'];?>" required><br><br>
		
		<b>Middle Name : </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="mname" value="<?php echo $_GET['middle_name'];?>"><br><br>
		
		<b>Last Name : </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="lname" value="<?php echo $_GET['last_name'];?>" required><br><br>

		
		<b>Phone Number : </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="phonenumber" value="<?php echo $_GET['phonenumber'];?>" required><br><br>
		
		
		<input type="submit" name="submit" value="Update">
		
		</div>
	</form>
  </div>
  
  <div class="main2">
	<?php
						
if(isset($_POST['submit']))
{
	$PAN=$_GET['PAN_number'];
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$lname=$_POST['lname'];
	$phonenumber=$_POST['phonenumber'];
	
	if(strlen($phonenumber)!=10 || strlen($PAN)!=10)
	{
		echo "<script>alert('Invalid phonenumber !! ')</script>";
	}
	else
	{

			$query= "UPDATE `customers` SET `fname` = '$fname',`mname` = '$mname',`lname` = '$lname', `phonenumber` = '$phonenumber' WHERE `customers`.`PAN` = '$PAN'";

			
			$data_new=mysqli_query($conn,$query);
		 
			if($data_new)  
			{
				echo "<script>alert('Updated Successfully')</script>";
							
										?>
								<!--refresh karne k liye   -->
								<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=http://localhost/demoproject/car booking/display_customer.php">
								
								<?php
				
				
			}
			else
			{
				echo "<font color='red'>record not updated </font>   <a href='display_customer.php'>Check updated list here</a>"; 
			}
	}		
	
}
else
{
	//echo "<font color='blue'>Click the button to update</font>";

}	
			
?>		

</div>
</div>
</body>

</html>
