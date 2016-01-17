<?php
ini_set('display_errors', true);
error_reporting(E_ALL);

require ("../include/lib.php"); 
// conection to base de datos
require ('../include/connectiondb.php'); 


$sql = 'SELECT * FROM category ORDER BY category.ORDER ASC';


$result = mysqli_query($con, $sql);
 


 
?>

<!DOCTYPE html>
 <html>
    <head>
        <meta charset="UTF-8">
        <title>Add Category</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="style" type="text/css"/>
        <!-- Bootstrap -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
<!--    <link href="../css/modern-business.css" rel="stylesheet"<>
    <link href="../css/main.css" rel="stylesheet">-->
    </head>
    <body>          
       
   <section class="container-fluid">      
       <div class="row">
           <?php
                       include ('include/MenuAdmin.php');
                     ?>
       </div>                       
       <aside class="col-sm-12">
             <div class="container">
               <div class="row">
                  <!-- Button trigger modal -->
                  <div class="col-xs-4 text-left"> <h1>Category</h1> </div>                 
                    
                  <div class="col-xs-4">
                        <form class="form-search" method="get" id="s" action="/">
                            <div class="input-append input-medium">
                                <input type="text" class="input-medium search-query" name="s" placeholder="Search" value="">
                                <button type="submit" class="add-on"><span class="glyphicon glyphicon-search"></span></button>
                            </div>
                            </form>
                         </div>
                  <div class="col-xs-4">
                           <button type="button" class="btn btn-primary btn-lg text-right" data-toggle="modal" data-target="#myModal">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>  ADD NEW
                         </button>
                    </div>
                </div>
                 <div class="row">
                     
                     
                 </div>
                        
                        
                        <div class="table-responsive">          
                        <table class="table">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Category Name</th>
                              <th>Description</th>
                              <th>Order</th>
                              <th>Price</th>
                              <th>Edit</th>
                              <th>Remove</th>                               
                            </tr>
                          </thead>
                          <tbody>
                              <?php
                              if (mysqli_affected_rows($con) > 0 ) {
                                   while ($row = mysqli_fetch_assoc($result)) {
                                       $Cnombre = $row["NAME"];
                                       $descrip = $row["DESCRIPTION"];
                                       $Corder = $row["ORDER"];
                                       $Cid = $row["ID"];
                                       $CPrecio = $row["PRICE"];
                                       $salida = '<tr>'.
                                            '<td style="width:3%;">'.$Cid.'</td>'.
                                            '<td style="width:20%;">'.$Cnombre.'</td>'.
                                            '<td style="width:20%;">'.$descrip.'</td>'.
                                            '<td style="width:5%;" class="text-center">'.$Corder.'</td>'.
                                            '<td style="width:10%;">'.$CPrecio.'</td>'.
                                            '<td style="width:10%;"><button><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</td>'.   
                                            '</button><td>'.
                                            '<button style="width:20%;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Del</button></td>'.                                               
                                            '</tr>';
                                     
                                       echo $salida;
                                   }
                                     /* free result set */
                                   mysqli_free_result($result);
                              }ELSE {
                                  echo 'NO FOUND RECORD';
                               }
                               
                               mysqli_close($con);
                             
                              ?>
                              
                            
                          </tbody>
                        </table>
                        </div>
                      </div>
				     
		   </aside>    
    </section>
            
       

<!-- Modal -->
<form class="form-add" method="POST" id="s" action="/">
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h1 class="modal-title" id="myModalLabel">ADD NEW CATEGORY</h1>
      </div>
      <div class="modal-body">
          <input type="text" class="form-control" name="Name" placeholder="Name" value=""><br>
          <input type="text" class="form-control" name="description" placeholder="Description" value=""><br>

          <input type="text" class="form-control" name="Precio" placeholder="Price" value=""><br>
          <input type="text" class="form-control" name="Order" placeholder="Order" value=""><br>
           
   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button id="submit" type="button" class="btn btn-primary">Save changes</button>
        <p id="salida"></p>
      </div>
    </div>
  </div>
</div>
</form>
 
 
<!--        here applicamos jquery-->

   <script src="https://code.jquery.com/jquery-1.11.3.js" type="text/javascript"></script>   
     
        
        
  <?php 
    include ("../include/footer.php");
  
    include ("../include/scriplist.php"); 

 ?> 
  <script>
  
$('#myModal').on('shown.bs.modal', function () {
    
  $('#myInput').focus();
});


    $(document).ready(function () {
    $("#submit").click(function(){
       
        var name = $('input[name="Name"]').val(); 
        var Description = $('input[name="description"]').val(); 
        var Precio = $('input[name="Precio"]').val(); 
        var order = $('input[name="Order"]').val(); 
        
        $.ajax({
           
            url: "category_add.php", //process to mail
            data: {name: name, description:Description, precio:Precio,order:order},  
            type: "POST",
            success: function(msg){
            alert(msg);  
            
//                $("#form-content").modal('hide'); //hide popup  
            },
            error: function(){
                alert("failure");
            }
        });
    });
});
</script>
    </body>
    
</html>
