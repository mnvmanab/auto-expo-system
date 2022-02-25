<!DOCTYPE HTML>

<?php
include("connection.php");
//error_reporting(0);


$_GET['model'];
$_GET['price'];
$_GET['available'];
$_GET['engine'];
$_GET['picsource'];

$_GET['color'];
$_GET['brand_name'];
$_GET['type_name'];
$_GET['dealer_name'];

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
	 /* background-color:black */
    }
    
    .button2 {
    background-color: dodgerblue; 
    border: none;
	color: white;
    border-radius: 4px;
    width: 200%;
    height: 50px;
	font-size: 100%;
}


.button2:hover {
    background-color: pink;
    colr: white;
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

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="index2.php">Home</a></li>

							<li>
								<a href="#" class="dropdown-toggle">Manage</a>

								<ul>
									<li><a href="display_brand.php">Brands</a></li>
									<li><a href="display.php">Cars</a></li>
									<li><a href="display_color.php">Colors</a></li>
									<li><a href="display_customer.php">Customers</a></li>
									<li><a href="display_dealer.php">Dealers</a></li>
									<li><a href="display_type.php">Fuel Type</a></li>
								</ul>
							</li>
							<li><a href="display_booking.php">Bookings</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1><?php echo $_GET['brand_name']; //name  ?><span class="pull-right"><u><i><?php echo $_GET['model']; ?></i></u></span></h1>
							
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
												?>
										      
										    </div>
										      
										  </div>
										 
										</div>
									</div>

									<div class="col-lg-5">
										<h3>Vehicle Description</h3>

										<label class="m-n">Engine</label>
										<p>-	<?php echo $_GET['engine']; ?> cc</p>
									</div>
								</div>
							</div>

							<br>
							

							<form action="#">
								<div class="fields">
									<div class="field quarter">
					                    <label class="m-n">Brand</label>
					                     
					                    <input type="text" readonly="" value="<?php echo $_GET['brand_name']; ?>">
					                </div>
									
									<div class="field quarter">
					                    <label class="m-n">Model</label>
					                     
					                    <input type="text" readonly="" value="<?php echo $_GET['model']; ?>">
					                </div>

					                <div class="field quarter">
					                    <label class="m-n">Color</label>
					                     
					                    <input type="text" readonly="" value="<?php echo $_GET['color']; ?>">
					                </div>

					                <div class="field quarter">
					                    <label class="m-n">Dealer Name</label>
					                     
					                    <input type="text" readonly="" value="<?php echo $_GET['dealer_name']; ?>">
					                </div>

					             

					                <div class="field quarter">
					                    <label class="m-n">Fuel Type</label>
					                     
					                    <input type="text" readonly="" value="<?php echo $_GET['type_name']; ?>">
					                </div>

									<div class="field quarter">
					                    <label class="m-n">Available</label>
					                     
					                    <input type="text" readonly="" value="<?php echo $_GET['available']; ?>">
					                </div>

					                <div class="field quarter">
					                    <label class="m-n">Price</label>
					                     
					                    <input type="text" readonly="" value="RS.<?php echo $_GET['price']; ?>">
					                </div>

									

					              
								</div>
							</form>
							
							<div class="container-fluid">
								<div class="row">
									

									<div class="col-md-9">
											<div class="btn">
												<button class="button button2" >
												 <?php 
													
													$query1="SELECT * FROM cars INNER JOIN color ON cars.color=color.color_id INNER JOIN type ON cars.type=type.type_id INNER JOIN brand ON cars.brand=brand.brand_id INNER JOIN dealer ON cars.dealer=dealer.dealer_id WHERE cars.car_id='$car_id'";
													
													$data1 = mysqli_query($conn,$query1);
													$total1= mysqli_num_rows($data1);


													while($result=mysqli_fetch_assoc($data1))
													{
																				 
													echo " <a href='booking.php?car_id=$result[car_id]&model=$result[model]&price=$result[price]&brand_name=$result[brand_name]&picsource=$result[picsource]&available=$result[available]&color=$result[color_name]&brand_ID=$result[brand_id]'> BOOK </a>" ;
													
													}
				
												 
													?><br><br><br>
												 
													
												</button>
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