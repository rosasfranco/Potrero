<?php
    require_once("template.php");
    require("../controllers/fiambre_controller.php");
    $fiambres=getFiambres($connection);
    $fiambre=getFiambre($connection, 2);
    $f=mysqli_fetch_array($fiambre);


?>

       
        <section id="quienes-somos" class="contenedor sobre-nosotros">
            <h2 class="titulo text-center">¿Quienes Somos?</h2>

            <div class="contenedor-sobre-nosotros">
                <div class="contenido-textos px-4 pt-2">

                    <h3>La Turca</h3>
                    <p>Somos una fiambreria ubicada en Rio Gallegos - Santa Cruz, cuyo objetivo es brindar un
                        servicio de alta calidad para satisfacer a los paladares de nuestros clientes.
                        Contamos con la representacion exclusiva de la linea Los Calvos, Tremblay y tambien con el
                        Frigorifico Rafaela, los cuales estan Entre uno de los mejores a nivel nacional, asegurando
                        la Excelente calidad de sus productos.
                    </p>

                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
       
        <section class="page-section bg-light" id="portfolio">
            <div class="container"> 
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Portfolio</h2>
                   </div>
                <div class="row">
                    <?php foreach ($fiambres as $fiambre){ ?>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1"> 
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?php echo($fiambre["img"])?>" alt="" />
                           </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php echo($fiambre
                                ["name"])?></div>
                                 <div class="portfolio-caption-heading"><?php echo($fiambre
                                ["marca"])?></div>    
                            </div>
                                <?php if($auth==true) { ?>
                                    <form class="bg-faded card-body px-lg-4" action="../controllers/fiambre_controller.php" method="post">
                                        <input name="id" type="text" hidden value="<?php echo($fiambre["id"]) ; ?>">
                                        <button style="background: red; border: none;color:white;" type="submit" class="card-link text-uppercase btn" name="deleteFiambre">
                                            Eliminar
                                        </button>
                                    </form>
                                <?php } ?>
                        </div>
                    </div>
                    <?php   } ?>
                </div>  
                <?php if ($auth==true) {?>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Agregar Fiambre
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Crear Fiambre</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="../controllers/fiambre_controller.php" method="post"  enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre del fiambre</label>
                                <input required type="text" class="form-control" id="exampleInputEmail1" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="marca" class="form-label">Marca</label>
                                <input required type="text" class="form-control" id="exampleInputEmail1" name="marca">
                            </div>  
                            <div class="mb-3">
                                <label for="precio" class="form-label">Precio</label>
                                <input required type="text" class="form-control" id="exampleInputEmail1" name="precio">
                            </div>
                            <div class="mb-3">
                                <label for="peso" class="form-label">Peso</label>
                                <input required type="text" class="form-control" id="exampleInputEmail1" name="peso">
                            </div>
                            <div class="mb-3">
                                <label for="img" class="form-label">Imagen</label>
                                <input required type="file" class="form-control" id="exampleInputEmail1" name="img">
                            </div>
                            <div class="mb-3">
                                <label for="link" class="form-label">link</label>
                                <input required type="text" class="form-control" id="exampleInputEmail1" name="link">
                            </div>
                            <button name="createFiambre" type="submit" class="btn btn-primary">CREAR</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        
            </div>
            
            
        </section>
        
        <!-- Team-->
        <section class="page-section bg-light" id="login">
            
        </section>
      
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
               <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Franco Rosas 2023</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/profile.php?id=100087261191558" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com//fiambrerialaturca/" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://api.whatsapp.com/send?phone=2966549003" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                    </div>
                    
                    <h2 class="titulo-final"> Rio Gallegos, Santa Cruz, Argentina. 2023</h2>
 
                </div>
            </div>
        </footer>

       
     </footer>
                
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
            <!-- Portfolio item 1 modal popup -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="../storage/img/close_icon.svg"  alt="Close modal" style="width: 20px; height: 20px" /></div>
            <img src="ruta_de_la_imagen.png" alt="Salir" >

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Aquí mostrarás la información específica del producto -->
                            <h2 class="text-uppercase"><?php echo $fiambre["name"]; ?></h2>
                            <p class="item-intro text-muted"><?php echo $fiambre["marca"]; ?></p>
                            <p class="item-intro text-muted"><?php echo $fiambre["precio"]; ?></p>
                            <p class="item-intro text-muted"><?php echo $fiambre["peso"]; ?></p>
                            <img class="img-fluid d-block mx-auto" src="<?php echo $fiambre["img"]; ?>" alt="" />
                            <!-- Puedes agregar más detalles del producto aquí -->
                            <button class="btn btn-primary" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-times me-1"></i>
                                Cerrar Detalles
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



    </div>

        <!-- Portfolio item 1 modal popup-->
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../public/js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
