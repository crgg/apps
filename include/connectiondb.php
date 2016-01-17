<?php
// conntetion to base de datos

$serverName = '127.0.0.1';
$user = "root";
$pass = "";
$db = "restadb";

 $url = parse_url(getenv("mysql://bb648ed5d5536e:caa7f1be@us-cdbr-iron-east-03.clear
db.net/heroku_562af75849a3e82?reconnect=true"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);
$con = new mysqli($serverName,$username,$password,$db); 

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
//echo 'Connected successfully';
//mysql_close($link);