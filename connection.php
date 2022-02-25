<?php
$servername="localhost";
$username="root";
$password="";
$dbname="cbs"; 

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn)    //(connected to database or not)
{
 die("connection failed");  
}
?>