<?php
require ("../include/lib.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Administrator</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="style" type="text/css"/>
     <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">     
</head>

<body>
  


<div>
    <section id="wrap">
       
        
    <div class="container">
	        <div class="col-xs-12">
	    	<h1 class="text-center">Welcome Administrator</h1>
	        </div>
	    
        <div class="row" >
            

		    <?php
                       include ('include/MenuAdmin.php');
                     ?>
		   <aside class="col-xs-9" style="background-color: #1cc7ff;">
                       
				     
		   </aside>    

         </div>
<?php include ("../include/footer.php"); ?>
    </div>
    </section> 
 </div>
    



  
<?php 
     
  
    include ("../include/scriplist.php"); 
 ?>
</body>
</html>