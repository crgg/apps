<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/login.css" rel="stylesheet" type="text/css">
<title>Untitled Document</title>

<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script>
var veri= {
	error:$('#errores').val().trim()};

if (!veri.error) {
	alert ('no es blanco');
} else{ 
	  $( "#login" ).effect( "shake" );} 
 
</script>

</head>

<body>

<div class="loginbox radius">
<h2 style="color:#FFF; text-align:center">Auto Collision Center</h2>
	<div class="loginboxinner radius">
    	<div class="loginheader">
    		<h1 class="title">Login</h1>
        	<!--<div class="logo"><img src="http://w3lessons.info/logo.png" /></div>-->
    	</div><!--loginheader-->
        
        <div class="loginform">
                	
        	<form id="login" action="" method="post">
            	<p>
                	<label for="username" class="bebas">User name</label>
                    <input type="text" id="username" name="username" value="" class="radius2" />
                </p>
                <p>
                	<label for="password" class="bebas">Password</label>
                    <input type="password" id="password" name="password"  class="radius2" />
                </p>
                <p>
                	<button class="radius title" name="client_login">Login</button>
                </p>
                <span id="errores"><?php echo $error; ?></span>
            </form>
        </div><!--loginform-->
    </div><!--loginboxinner-->
</div><!--loginbox-->





<!--<div id="main">
<h1>Auto collision Center </h1>
<div id="login">
<h2>Login Form</h2>
<form action="" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password">
<input name="submit" type="submit" value=" Login ">

</form>
</div>
</div>-->

<!--<script>
var veri= {
	error:$('#errores').val().trim()};

if (!veri.error) {
	
	  $( "#login" ).effect( "shake" );}
	   
	
 
</script>-->

</body>
</html>