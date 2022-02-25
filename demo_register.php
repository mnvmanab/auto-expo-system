<!---insert karne k liye--->

<?php
include("connection.php");
error_reporting(0);
?>

<html>
<head>
<title>MNV MOVIES</title>
<link rel="stylesheet" type="text/css"  href="css/my_style.css">
</head>

<body>
    <form action="" method="post">
    
		<div id="login-box">
			<div class="right-box">
			 <h1>Sign Up</h1>
			 
			<input type="text" name="username" placeholder="username" required>
			<input type="email" name="email" placeholder="email" required>
			<input type="text" name="phonenumber" placeholder="phone number" required>
			
			<input type="password" name="password" placeholder="password" required>
			
			<input type="password" name="password2" placeholder="re-type password" required>
			
			
			
			
			<input type="submit" name="submit" value="signup"/>
					
		
		    <p>Already a member ?
			<a href="#">Login</a></p>
		
			</div>
			
			<div class="left-box">
	        <img src="images\download.jpg" >
	        </div>
        </div> 
   
    </form> 
<?php
			
			
			
			
			if($_POST['submit'])
			{
				
			$username=$_POST['username'];
			$email=$_POST['email'];
			$phonenumber=$_POST['phonenumber'];
			$password=$_POST['password'];
			$password2 = ($_POST['password2']);
    
			if ($password != $password2) 
			{
			die("<font color='red'>The two passwords do not match</font>");
			
			}
    
			
			
				if($username!="" && $email!="" && $phonenumber!="" && $password!="" && $password2!="")
				{
					
					$query="INSERT INTO `customers` (`username`,`email`,`phonenumber`, `password`) VALUES ('$username','$email','$phonenumber','$password')";
				
					$data=mysqli_query($conn,$query);
					
					if($data)  
					{
					echo "<script>alert('Registered Successfully')</script>";
			
				?>
					<!--refresh karne k liye   -->
					<META HTTP-EQUIV="REFRESH" CONTENT="2; URL=http://localhost/demoproject/useraccount/demo_register.php">
			
					<?php
					}
					else
					{
						die('Insert Error'.mysqli_error($conn));
					}
					
				}
				else
				{
					echo "<font color='red'>all fields required</font>";
				}
			}	
				
	
			?>
