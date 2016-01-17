<?php
// conntetion to base de datos

$serverName = '127.0.0.1';
$user = "root";
$pass = "";
$db = "restadb";

 $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);
$con = new mysqli($server,$username,$password,$db); 

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
//echo 'Connected successfully';
//mysql_close($link);