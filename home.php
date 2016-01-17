<?php
error_reporting(E_ALL ^ E_DEPRECATED);
ini_set('display_errors', 1);

// conection to base de datos
require ('include/connectiondb.php');

require ("include/lib.php");

//mysql_close($link);
$sql = 'SELECT * FROM category ORDER BY category.ORDER ASC';


$result = mysqli_query($con, $sql);
?>
 
 <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
     <?php require_once 'include/header.php'; ?>
     
  

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('img/04.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/02.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/05.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Bienvenido a Taqueria el toreo
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> DAILY MENU</h4>
                    </div>
                    <div class="panel-body">
                        <p>We have breakfast, appetizers, and your other favorites.</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> Speciales</h4>
                    </div>
                    <div class="panel-body">
                        <p>We have Daily and Monthly Specials! So what are you waiting for?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i> Catering</h4>
                    </div>
                    <div class="panel-body">
                        <p>Have a TBK fiesta coordinator help plan your next event!</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Platos favoritos</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <button class="btn btn-success btn-sm" style="position:absolute;left:273px; top:159px;">Mas Detalles</button>  
                    <img class="img-responsive img-portfolio img-hover" src="img/imagePublic/fotos (1).jpg" alt="">
                    
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <button class="btn btn-success btn-sm" style="position:absolute;left:273px; top:159px;">Mas Detalles</button>  
                    <img class="img-responsive img-portfolio img-hover" src="img/imagePublic/fotos (2).jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <button class="btn btn-success btn-sm" style="position:absolute;left:273px; top:159px;">Mas Detalles</button>  
                    <img class="img-responsive img-portfolio img-hover" src="img/imagePublic/fotos (3).jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <button class="btn btn-success btn-sm" style="position:absolute;left:273px; top:159px;">Mas Detalles</button>  
                    <img class="img-responsive img-portfolio img-hover" src="img/imagePublic/fotos (4).jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <button class="btn btn-success btn-sm" style="position:absolute;left:273px; top:159px;">Mas Detalles</button>  
                    <img class="img-responsive img-portfolio img-hover" src="img/imagePublic/fotos (5).jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <button class="btn btn-success btn-sm" style="position:absolute;left:273px; top:159px;">Mas Detalles</button>  
                    <img class="img-responsive img-portfolio img-hover" src="img/imagePublic/fotos (6).jpg" alt="">
                </a>
            </div>
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Menu</h2>
            </div>
            <div class="col-md-6">
                 
                <ul>
                    <?php
                     
if ((mysqli_affected_rows($con) > 0 )) {
     

    /* fetch associative array */
    while ($row = mysqli_fetch_assoc($result)) {
        ?>

                                                <li class="list-group-item"><?php
                                        echo $row["NAME"];
                                        $pr = $row["PRICE"];
                                        if ($pr > 0) {
                                            echo '     $ ' . $pr;
                                        }
        ?>    </li>


                                                    <?php
                                                }

                                                /* free result set */
                                                mysqli_free_result($result);
                                            }
                                            mysqli_close($con);
                                            ?>
                </ul>
               
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="img/local.jpg" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                     <?php require 'include/menunav.php'; ?>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="contact.php">Call to Action</a>
                </div>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; crgg computer</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>

 
