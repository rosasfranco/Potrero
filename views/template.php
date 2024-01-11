<?php
    require("../database/database.php");
    require("../controllers/user_controller.php");
    session_start();
    $datos=loginUser(array($_SESSION["username"],$_SESSION["password"]),$connection);
    $auth;
    if($datos==null){
        $auth=false;
    }else{
        $auth=true;
    } 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Fiambreria - La Turca</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../public/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="../storage/img/logo.png" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="./home.php">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#quienes-somos">Quienes Somos</a></li>
                       <?php if($auth == false) { ?>
                            <li class="nav-item"><a class="nav-link" href="./register.php">Registro</a></li>
                            <li class="nav-item"><a class="nav-link" href="./login.php"> Login</a></li>
                        <?php }else { ?>
                                <form class="nav-item px-lg-4" action="../controllers/logout_controller.php" method="post">
                                    <button style="background: none; border: none;" type="submit" class="nav-link text-uppercase" name="deleteFiambre">
                                        Salir
                                    </button>
                                </form>
                          <?php } ?>

                       </ul>
                </div>
            </div>
        </nav>
        <section id="carouselExampleControls banner" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner banner__contenido">
              <div class="carousel-item active">
                <img src="../storage/img/carrusel1.jpg" class="d-block w-100" alt="no hay imagien">
              </div>
              <div class="carousel-item">
                <img src="../storage/img/carrusel2.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../storage/img/carrusel3.jpeg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
              data-bs-slide="8prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </section>

