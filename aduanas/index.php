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
<section>
        <nav class="navbar navbar-dark bg-dark navbar-expand-sm pe-5 ps-5">
            <a class="navbar-brand" href="index.php">
                <img src="src/logo.jpg" width="30" height="30" alt="logo" style="border-radius: 20px;">
                Importaciones y Exportacion GJ
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-5" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-list-5">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Aduanas
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="aduanas/Documentacion.php">Documentación</a></li>
                      <li><a class="dropdown-item" href="aduanas/Empleados.php">Registro de empleados</a></li>
                      <li><a class="dropdown-item" href="aduanas/Bitacora.php">Bitacora</a></li>
                    </ul>
                  </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Exportaciones
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="Exportaciones/Registro.php">Registro</a></li>
                    <li><a class="dropdown-item" href="Exportaciones/Empleados.php">Empleados</a></li>
                    <li><a class="dropdown-item" href="Exportacioes/Productos.php">Entrega de productos</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Importaciones
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="Importaciones/Registro.php">Registro</a></li>
                    <li><a class="dropdown-item" href="Importaciones/Empleados.php">Empleado</a></li>
                    <li><a class="dropdown-item" href="Importaciones/Productos.php">Entrega de productos</a></li>
                  </ul>
                </li>
               
                
                </ul>
            </div>
        </nav>
    </section>
    <!-- Fin Navbar -->

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="src/importExport.jpg" class="d-block w-100" alt="importExport">
          </div>
          <div class="carousel-item">
            <img src="src/importExport2.jpg" class="d-block w-100" alt="importExport2">
          </div>
          <div class="carousel-item">
            <img src="src/importExport3.jpg" class="d-block w-100" alt="importExport3">
          </div>
        </div>
       <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span>
        </button>-->
        <!--<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Siguiente</span>
        </button>-->
      </div>

    <!-- Inicio contenido -->
     <!-- Son cards con una imagen to chula como no recuerdo como darle espaciados les meto un br-->
    <section>
        <div class="container contenido">
        <br>
            <div class="card p-5 ">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="src/pappers.jpg" class="img-fluid rounded-start" alt="pappers" style="border-radius: 3vh;">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Papeleo</h5>
                      <p class="card-text">Nos encargamos personalmente de revisar los documentos entregados por parte de las empresas
                        y validar cada uno de ellos, mientras evaluamos si entra en el rango de las mejores empresas de exportacion e importacion.
                      </p>
                      <p class="card-text"><a href="https://www.comercioyaduanas.com.mx/aduanas/aduana/que-es-una-aduana/">Más información Aquí</a></small></p>
                    </div>
                  </div>
                </div>
              </div>
            <br>

              <div class="card p-5 ">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="src/exportaciones.jpg" class="img-fluid rounded-start" alt="export" style="border-radius: 3vh;">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Exportaciones</h5>
                      <p class="card-text">Dentro del área de las exportaciones nos enfocamos especialmente en que estos cumplan con 
                        todos los documentos necesarios para hacer ver que son capaces de realizar su trabajo sin problemas .</p>
                      <p class="card-text"><a href="https://es.wikipedia.org/wiki/Exportación">Más información Aquí</a></small></p>
                    </div>
                  </div>
                </div>
              </div>
              <br>

              <div class="card p-5 ">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="src/importaciones.jpg" class="img-fluid rounded-start" alt="import" style="border-radius: 3vh;">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Importaciones</h5>
                      <p class="card-text">En este ambito, las empresas que se encargan de importar productos con una calidad del 100% la cual es revisada por nosotros
                       para que todo se reparta en tiempo, forma y respetando la calidad de cada uno de los productos manejados.</p>
                       <p class="card-text"><a href="https://www.nestle.com.mx/aboutus/proveedores/comercio/importaciones">Más información Aquí</a></small></p>
                    </div>
                  </div>
                </div>
              </div>
              <br>



        
        </div>
    </section><br>

    
    <!-- Fin contenido -->
<?php 
include './includes/footer.php'
?>
</body>
</html>