<html>
<head>
<link rel="stylesheet" type="text/css" href="css/new_style.css">
</head>
<style>

td{
padding: 10px;
}


</style>


<?php
include("connection.php");
//error_reporting(0);

$query="SELECT * FROM cars INNER JOIN color ON cars.color=color.color_id INNER JOIN type ON cars.type=type.type_id INNER JOIN brand ON cars.brand=brand.brand_id INNER JOIN dealer ON cars.dealer=dealer.dealer_id";


$data = mysqli_query($conn,$query);
$total= mysqli_num_rows($data);




		if($total!=0)
		{
?>

<body> 
	<div class="grid-container">
		  <div class="top">
				<ul>
				  <li><a class="active" href="">Home</a>
				  </li>
				  <li><a href="about.php">About</a> 
				  </li>
				  <li><a href="upcoming_tab.php">Upcoming Movies</a>
				  </li>
					  
					
				</ul>
	</div>
	<div class="main-box">
  
		  <table border="2">
			   <tr>
				   
				   <th>model</th>
				   
				   <th>image</th> 
			   </tr>
			
		<?php
					while($result=mysqli_fetch_assoc($data))
					{
						
						echo "<tr>
						  
						  
						   <td>".$result['model']."</td>
						   
						   
						   <td><a href='car_details.php?car_id=$result[car_id]&model=$result[model]&price=$result[price]&brand_name=$result[brand_name]&type_name=$result[type_name]&dealer_name=$result[dealer_name]&picsource=$result[picsource]&color=$result[color_name]&available=$result[available]&description=$result[description]&brand_ID=$result[brand_id]&type_ID=$result[type_id]&dealer_ID=$result[dealer_id]&color_ID=$result[color_id]'><img src=".$result['picsource']." height='100' width='100'/></a></td>
						   
						   
						
					</tr>";
					}
				}
				else
				{
					echo "No Records";
				}
		?>
		</table>
  
  
  
  </div>
  <div class="foot">
  <b><a href='registration.php'>insert new car</a></b>
  </div>	

	
	
   



</body>
</html>
<script>
function checkdelete()
{
	return confirm('Are you sure you want to delete this data ? ');
}
</script>
