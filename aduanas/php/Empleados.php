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
    <section>
        <nav class="navbar navbar-dark bg-dark navbar-expand-sm">
            <a class="navbar-brand" href="index.html">
                <img src="../src/logo.jpg" width="30" height="30" alt="logo" style="border-radius: 20px;">
                Importaciones y Exportacion GJ
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-5" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-list-5">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sobre Nosotros</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Registros
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="Aduanas.php">Aduanas</a></li>
                    <li><a class="dropdown-item" href="Empleados.php">Empleados</a></li>
                    <li><a class="dropdown-item" href="Importar.php">Empresa importera</a></li>
                    <li><a class="dropdown-item" href="#">Empresa exportera</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contactanos</a>
                </li>
                
                </ul>
            </div>
        </nav>
    </section>
    <!-- Fin Navbar -->

    
    <!-- Inicio contenido -->
    <section>

    <h3 class="text-center mt-4 pt-5">Registrar Venta</h3>

<div class=" container-xxl m-2"  >

<div class="container d-flex justify-content-center align-items-center ">

    <form class="row g-2 ms-5 me-5 ps-5 pe-5 " action="insertarEnVentas.php" method="POST">
        Nombre Empleado: <input class="form-control" type="name" name="ICant1" id="ICant1">
        Codigo: <input type="number" class="form-control" name="ICant2" id="ICant2">
        RFC: <input class="form-control" type="name" name="ICant3" id="ICant3">
        Aduana local: <input class="form-control" type="name" name="ICant1" id="ICant1">
        Puesto: <input type="number" class="form-control" name="ICant2" id="ICant2">
        
        <!--<div class="form-check">
            <input class="form-check-input" type="checkbox" name="IComision" id="IComision">
            <label class="form-check-label" for="flexCheckDefault">
                Comision
            </label>
        </div>-->

        <a class="btn btn-dark" href="main.php">Volver</a>
        <input class="btn btn-secondary" type="submit" value="Registrar">
        
        
        </form>

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