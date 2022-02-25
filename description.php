<!DOCTYPE HTML>

<?php
include("connection.php");
//error_reporting(0);


$_GET['model'];
$_GET['price'];
$_GET['quantity'];

$_GET['picsource'];



$car_id =$_GET['car_id'];


?>
<html>
	<head>
		<title>PHPJabbers.com | Free Car Dealer Website Template</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="cbs_tem/assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="cbs_tem/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="cbs_tem/assets/css/noscript.css" /></noscript>
	</head>
	<style>
	.btn
    {
     padding-top: 40px; 
     padding-left: 55%;
     padding-bottom: 50px;
	 background-cr:black
    }
    
    .button2 {
    background-color: dodgerblue; 
    border: none;
	colr: white;
    border-radius: 4px;
    width: 200%;
    height: 50px;
	font-size: 100%;
}

.button2:hover {
    background-color: pink;
    colr: white;
}

.link4{
	font-size: 24px;
}
	</style>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.php" class="logo">
									<span class="fa fa-car"></span> <span class="title">Car Dealer Website</span>
								</a>

							

						</div>
					</header>

				

				<!-- Main -->
					<div id="main">
						<div class="inner">
							
							
							<div class="container-fluid">
								<div class="row">
									<div class="col-lg-7">
										<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
										  
										  <div class="carousel-inner">
										    <div class="carousel-item active">
											<?php  
	   												$query="SELECT picsource FROM cars WHERE cars.car_id='$car_id'";
													
													$data = mysqli_query($conn, $query);
													while($result =mysqli_fetch_assoc($data))
													{
													echo "<a href='$result[picsource]'> <img class='d-block w-100' src='".$result['picsource']."' height='400' width='400'/> </a>";
													}
													
													$price =$_GET['price'];

													$quantity=$_GET['quantity'];
													
													$total_price= $quantity*$price;
												?>
										      
										    </div>
										      
										  </div>
										 
										</div>
									</div>

									<div class="col-lg-5">
									
										
										
										<div class="fields">										
											<div class="field quarter">
												<label class="m-n">Model</label>
												 
												<input type="text" readonly="" value="<?php echo $_GET['model']; ?>">
											</div><br>
											<div class="field quarter">
												<label class="m-n">Price</label>
												 
												<input type="text" readonly="" value="RS.<?php echo $price; ?>">
											</div><br>
											<div class="field quarter">
												<label class="m-n">Quantity</label>
												 
												<input type="text" readonly="" value="<?php echo $quantity; ?>">
											</div><br>
											<div class="field quarter">
												<label class="m-n">Grand Total</label>
												 
												<input type="text" readonly="" value="RS.<?php echo $total_price; ?>">
											</div><br>
										</div>
										
									</div>
								</div>
							</div>

							<br>
					
							
							<div class="container-fluid">
								<div class="row">
									

									<div class="col-md-9">
											<div class="btn">
												<b><a class="link4" href='display_booking.php'>Back</a></b>
											</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					
					

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							
							
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="cbs_tem/assets/js/jquery.min.js"></script>
			<script src="cbs_tem/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="cbs_tem/assets/js/jquery.scrolly.min.js"></script>
			<script src="cbs_tem/assets/js/jquery.scrollex.min.js"></script>
			<script src="cbs_tem/assets/js/main.js"></script>

	</body>
</html>