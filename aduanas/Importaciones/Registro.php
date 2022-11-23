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
  

<h3 class="text-center mt-5 pt-5">Empresas exportadoras</h3>
    
    <div class="container d-flex  justify-content-center align-items-center ">

    <div class="container">         
  <table class="table">
    <thead>
      <tr class="table-dark">
        <th>Id</th>
        <th>Nombre</th>
        <th>RFC</th>
        <th>Transporte</th>
        <th>Sede principal</th>
        <th> </th>
      </tr>
    </thead>

<tbody>

<?php
        //include '../DB/DB2.php';
         include '../DB/Local.php';
        if($connection->connect_error){
            die("conexion fallda: ". $conn->connect_error);
        }
        $sql = "SELECT * FROM empleados";
        $query = mysqli_query($connection, $sql);
        while ($row = mysqli_fetch_array($query)){
            //$nameVend = "SELECT * FROM vendedores WHERE idVendedor = '".$row['Vendedores_idVendedor']."'";
            //$Vendedor = mysqli_fetch_array(mysqli_query($connection,$nameVend))
            ?>
                <tr>
                    <th class="table-primary"><?php echo $row['idExportacion']?></th>
                    <th class="table-primary"><?php echo $row['nombreExp'] ?></th>
                    <th class="table-primary"><?php echo $row['rfcExp'] ?></th>
                    <th class="table-primary"><?php echo $row['trasnpExp'] ?></th>
                    <th class="table-primary"><?php echo $row['sedeExp'] ?></th>
                    <th class="table-primary"><a class="btn btn-danger " href="EliRegistro.php?idExportacion=<?php echo $row['idExportacion'] ?>">Eliminar</a><th>

                </tr>
                
            <?php
            }
            ?>
        </tbody>


        </table>
            <a class="btn btn-dark m-3" href="../index.php">Salir</a>

            <a class="btn btn-dark m-3" href="RegEmpresa.php">Registrar empresa</a>
            

        </div>
        </div>
</section>
    <!-- Fin contenido -->
    <br>

<?php
include '../includes/footer.php'
?>
</body>
</html>