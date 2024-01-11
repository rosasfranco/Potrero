<?php
   require_once("template.php");
    if ($auth == true) {
        header('Location: ../views/home.php');
    }
?>
            <div class="container">
                <form action="../controllers/login_controller.php" method="post">
                    <div class="mb-3">
                        <label style="color:black;" for="username" class="form-label">Correo Electronico</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" >
                       </div>
                    <div class="mb-3">
                        <label style="color:black;"  for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Ingresar</button>
                </form>
            </div>

        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Franco Rosas - Potrero Digital 2023</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/profile.php?id=100087261191558" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/fiambrerialaturca/" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://api.whatsapp.com/send?phone=2966549003" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                    </div>
                   
                    <h2 class="titulo-final"> Rio Gallegos, Santa Cruz2, Argentina. 2023</h2>
 
                </div>
            </div>
        </footer>

       

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../public/js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>?php    </body>
</html>

