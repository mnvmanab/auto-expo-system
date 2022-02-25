<!DOCTYPE HTML>
<html>
	<head>
		<title>Auto Expo</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="cbs_tem/assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="cbs_tem/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="cbs_tem/assets/css/noscript.css" /></noscript>
	</head>
	<style>
	.main {   
    backgroun: yellow;
    }
	.inner {
    backgroun: wheat;
    }	
	.quote{
		font-size: 28px;
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
									<span class="fa fa-car"></span> <span class="title">Auto Expo System</span>
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
							<li><a href="index.php">Home</a></li>

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
					<div class="main">
							<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							  <ol class="carousel-indicators">
								<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
							  </ol>
							  <div class="carousel-inner">
								<div class="carousel-item active">
								  <img class="d-block w-100" src="cbs_tem/images/slider-image-1-1920x700.jpg" alt="First slide">
								</div>
								<div class="carousel-item">
								  <img class="d-block w-100" src="cbs_tem/images/slider-image-2-1920x700.jpg" alt="Second slide">
								</div>
								<div class="carousel-item">
								  <img class="d-block w-100" src="cbs_tem/images/slider-image-3-1920x700.jpg" alt="Third slide">
								</div>
							  </div>
							  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							  </a>
							  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							  </a>
							</div>

						<br>
						<br>

						<div class="inner">
							<!-- About Us -->
							<header id="inner">
								<h1><i>Book your new car  </i></h1>
								<p class="quote"><i>The  car  we  drive  say  a  lot  about  us ! !</i></p>
							</header>

							<br>
					<center><h2 class="h2"><u>Featured Cars</u></h2></center>
							

							<!-- Cars -->
							
				<?php
				include("connection.php");
				//error_reporting(0);

				$query="SELECT * FROM cars INNER JOIN color ON cars.color=color.color_id INNER JOIN type ON cars.type=type.type_id INNER JOIN brand ON cars.brand=brand.brand_id INNER JOIN dealer ON cars.dealer=dealer.dealer_id";


				$data = mysqli_query($conn,$query);
				$total= mysqli_num_rows($data);




				if($total!=0)
				{
				?>
				<section class="tiles">
					<?php
						
					while($result=mysqli_fetch_assoc($data))
					{
						
					?>	
						
							<article class="style">
								<span class="image">
								
						<?php echo "<td><a href='car_details.php?car_id=$result[car_id]&model=$result[model]&price=$result[price]&brand_name=$result[brand_name]&type_name=$result[type_name]&dealer_name=$result[dealer_name]&picsource=$result[picsource]&color=$result[color_name]&available=$result[available]&engine=$result[engine]&brand_ID=$result[brand_id]&type_ID=$result[type_id]&dealer_ID=$result[dealer_id]&color_ID=$result[color_id]'><img src=".$result['picsource']." height='330' width='500'/></a></td>"; ?>
											
											
								</span>
								
										<h2><?php echo $result['model']; ?></h2>	
								
							</article>	
						

								
		
				<?php
					
					}
				}
				else
				{
						echo "No Records";
				}
				?>
				</section>

				</div>
							
							
						

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								
							</section>
							<div class="inner2">
							<section>
								<h2 id="contact_info">Contact Info</h2>

								<ul class="alt">
									<li><span class="fa fa-envelope-o"></span><a href="#">manabgogoi@gmail.com</a></li>
									<li><span class="fa fa-phone"></span> 89742634367 </li>
									<li><span class="fa fa-map-pin"></span> Dwara Chuk, Dibrugarh,Assam</li>
								</ul>
							</section>
							</div>
							
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