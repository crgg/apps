<?php
// conntetion to base de datos

$serverName = '127.0.0.1';
$user = "root";
$pass = "";
$db = "restadb";

 
$con = mysqli_connect($serverName,$user,$pass,$db); 

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
//echo 'Connected successfully';
//mysql_close($link);