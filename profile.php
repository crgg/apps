<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>CRGG AUTO COLLIONS CENTER</title>
     <!-- <link href="style.css" rel="stylesheet" type="text/css">
      <!--<link href="css/menu.css" rel="stylesheet" type="text/css">--> 
     <script src="//code.jquery.com/jquery-1.10.2.js"></script>
     <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
     <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
       
     <!-- Custom CSS -->
    <link href="css/estilos.css" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">CRGG APPS 1.0</a>
            </div>
        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <!--<span class="glyphicon glyphicon-user"></span>-->
                        <i class="fa fa-user fa-fw"></i>  
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                 </ul>
                    
            </li>   
            
        </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <!--<li class="sidebar-search">
                             <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <! /input-group
                        </li> -->
                        <li>
                            <a href="../index.php"><i class="fa fa-dashboard fa-fw"></i>  Home</a>
                        </li>
                        <li>
                            <a href="order.html"><i class="fa fa-file-text"></i> ORDERS<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">NEW</a>
                                </li>
                                <li>
                                    <a href="morris.html">Edit</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> PRODUCTS</a>
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> MAINTENANCE<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">VEHICULE</a>
                                </li>
                                <li>
                                    <a href="buttons.html">YEARS</a>
                                </li>
                                <li>
                                    <a href="notifications.html">MODELS</a>
                                </li>
                                <li>
                                    <a href="Administrator/index.php"><i class="fa fa-users"></i> USERS</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                       
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            
      </nav>
    </div>

   <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>
</body>
</html>
