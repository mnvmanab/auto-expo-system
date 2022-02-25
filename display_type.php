<!---fuel type display --->
<style>
td{
padding: 10px;
}

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

.table-wrapper 
{ 
padding-top: 2%;
grid-area: main;
}




*{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}
body{
    font-family: Helvetica;
    -webkit-font-smoothing: antialiased;
    //backgroud: rgba( 71, 147, 227, 1);
    background: wheat;
}
h2{
    text-align: center;
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: white;
    padding: 30px 0;
}

/* Table Styles */

.table-wrapper{
    margin: 10px 70px 70px;
    //box-shdow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
}

.fl-table {
    border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 100%;
    max-width: 100%;
    white-space: nowrap;
    background-color: white;
}

.fl-table td, .fl-table th {
    text-align: center;
    padding: 8px;
}

.fl-table td {
    border-right: 1px solid #f8f8f8;
    font-size: 12px;
}

.fl-table thead th {
    color: #ffffff;
    background: #4FC3A1;
}


.fl-table thead th:nth-child(odd) {
    color: #ffffff;
    background: #324960;
}

.fl-table tr:nth-child(even) {
    background: #F8F8F8;
}

/* Responsive */

@media (max-width: 767px) {
    .fl-table {
        display: block;
        width: 100%;
    }
    .table-wrapper:before{
        content: "Scroll horizontally >";
        display: block;
        text-align: right;
        font-size: 11px;
        color: white;
        padding: 0 0 10px;
    }
    .fl-table thead, .fl-table tbody, .fl-table thead th {
        display: block;
    }
    .fl-table thead th:last-child{
        border-bottom: none;
    }
    .fl-table thead {
        float: left;
    }
    .fl-table tbody {
        width: auto;
        position: relative;
        overflow-x: auto;
    }
    .fl-table td, .fl-table th {
        padding: 20px .625em .625em .625em;
        height: 60px;
        vertical-align: middle;
        box-sizing: border-box;
        overflow-x: hidden;
        overflow-y: auto;
        width: 120px;
        font-size: 13px;
        text-overflow: ellipsis;
    }
    .fl-table thead th {
        text-align: left;
        border-bottom: 1px solid #f7f7f9;
    }
    .fl-table tbody tr {
        display: table-cell;
    }
    .fl-table tbody tr:nth-child(odd) {
        background: none;
    }
    .fl-table tr:nth-child(even) {
        background: transparent;
    }
    .fl-table tr td:nth-child(odd) {
        background: #F8F8F8;
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tr td:nth-child(even) {
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tbody td {
        display: block;
        text-align: center;
    }
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
.link2{
  text-decoration: none;

  padding-left: 48%;
  
}


</style>


<?php
include("connection.php");
error_reporting(0);

$query="SELECT * FROM type ORDER BY `type`.`type_id` ASC";
$data = mysqli_query($conn,$query);
$total= mysqli_num_rows($data);




		if($total!=0)
		{
?>

<div class="grid-container">


<div class=top>
			<div class="inner">

					<!-- Logo -->
				<a href="index.php" class="logo">
					<span class="fa fa-car"></span> <span class="title">Car Dealer Website</span>
				</a>
				
				
			</div>
			
			<div class="inner2">

				<b><a class="links" href='insert_type.php'>Insert New Fuel Type</a></b>

			</div>


</div>

<div class="table-wrapper">
   <table class="fl-table">
       <thead>
        <tr>
           <th>Fuel Type ID</th>
           <th>Name</th>
		   <th colspan="2">Operations</th>
        </tr>
        </thead>
  
         <tbody>
	
<?php
			while($result=mysqli_fetch_assoc($data))
			{
				
				echo "<tr>
				  
				   <td>".$result['type_id']."</td>
				   <td>".$result['type_name']."</td>
			   
				   <td> <a class='links' href='update_type.php?type_id=$result[type_id]&type_name=$result[type_name]'>Edit</a></td>
				   
				   <td><a class='links' href='delete_type.php?type_id=$result[type_id]' onclick='return checkdelete()'>Delete</a></td>
				
			</tr>";
			}
		}
		else
		{
			echo "No Records";
		}
?>
<tbody>
</table>
<br><br><br><br><br>
<b><a class="link2" href='index.php'>Back</a></b>
</div>

</div>
<!------------------------------------------------------>
	
<script>
function checkdelete()
{
	return confirm('Are you sure you want to delete this data ? ');
}
</script>
