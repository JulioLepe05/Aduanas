<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
       <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Importaciones y exportaciones</title>
</head>
<body>
   <!-- Inicio Navbar -->
   <?php
    include '../includes/navbar.php'
    ?>
    
    <!-- Inicio contenido -->

    
    <!-- Inicio contenido -->
    <section>

    <h3 class="text-center mt-2 pt-3">Registrar Venta</h3>

<div class=" container-xxl m-2"  >

<div class="container d-flex justify-content-center align-items-center ">

    <form class="row g-2 ms-5 me-5 ps-5 pe-5 " enctype="multipart/form-data"action="RegDocument.php" method="POST">
    <!-- MAX_FILE_SIZE debe preceder al campo de entrada del fichero -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    Registro de empresa: <input name="doc1" type="file" />

    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    Permiso: <input name="doc2" type="file" />

    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    Almacenamientos: <input name="doc3" type="file" />
<br><br>

    
    <a class="btn btn-dark" href="../index.php">Volver</a>
    <input class="btn btn-secondary" type="submit" value="Registrar">

    </form>

        
        
        </div>
    </div>
</section>
    <!-- Fin contenido -->

    <!-- Inicio footer -->
    <section>
        <!-- Footer -->
    <footer class="bg-dark text-center text-white" id="contacto">
        <!-- Grid container -->
        <div class="container p-4">
    
        <!-- Section: Text -->
        <section class="mb-4">
            <p>
            Tambien pueden contactarnos por medio de nuestras redes sociales
            </p>
        </section>
        <!-- Section: Text -->
    
        <!-- Section: Links -->
        <section class="">
            <!--Grid row-->
            <div class="row">
            <!--Grid column-->
            <div class="col  mb-4 mb-md-0">
                <h5 class="text-uppercase">ING. Gabriel Colmenares</h5>
    
                <ul class="list-unstyled mb-0">
                <li>
                    <a href="#!" class="text-white">Linkedin</a>
                </li>
                <li>
                    <a href="#!" class="text-white">Facebook</a>
                </li>
                <li>
                    <a href="#!" class="text-white">Twitter</a>
                </li>
                <li>
                    <a href="#!" class="text-white">Instagram</a>
                </li>
                </ul>
            </div>
            <!--Grid column-->
    
            <!--Grid column-->
            <div class="col mb-4 mb-md-0">
                <h5 class="text-uppercase">ING. Julio Lepe</h5>
    
                <ul class="list-unstyled mb-0">
                <li>
                    <a href="#!" class="text-white">Linkedin</a>
                </li>
                <li>
                    <a href="#!" class="text-white">Facebook</a>
                </li>
                <li>
                    <a href="#!" class="text-white">Twitter</a>
                </li>
                <li>
                    <a href="#!" class="text-white">Instagram</a>
                </li>
                </ul>
            </div>
            <!--Grid column-->
    
            </div>
            <!--Grid row-->
        </section>
        <!-- Section: Links -->
        </div>
        <!-- Grid container -->
    
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">GJ ENGINIEERS</a>
        </div>
        <!-- Copyright -->
    </footer>
  <!-- Footer -->
    </section>
    <!-- Fin footer -->
</body>
</html>