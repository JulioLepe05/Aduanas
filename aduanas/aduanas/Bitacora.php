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
  

<h3 class="text-center mt-5 pt-5">Bitacora</h3>
    
    <div class="container d-flex  justify-content-center align-items-center ">

    <div class="container">         
  <table class="table">
    <thead>
      <tr class="table-dark">
        <th>Id</th>
        <th>Nombre</th>
        <th>Codigo</th>
        <th>Producto</th>
        <th>Número</th>
      </tr>
    </thead>

<tbody>

<?php
        //include '../DB/DB1.php';
        include '../DB/Local.php';
        if($connection->connect_error){
            die("conexion fallda: ". $conn->connect_error);
        }
        $sql = "SELECT * FROM bitacora";
        $query = mysqli_query($connection, $sql);
        while ($row = mysqli_fetch_array($query)){
            //$nameVend = "SELECT * FROM vendedores WHERE idVendedor = '".$row['Vendedores_idVendedor']."'";
            //$Vendedor = mysqli_fetch_array(mysqli_query($connection,$nameVend))
            ?>
                <tr>
                    <th class="table-primary"><?php echo $row['idAduanas'] ?></th>
                    <th class="table-primary"><?php echo $row['nombreBit'] ?></th>
                    <th class="table-primary"><?php echo $row['codigoBit'] ?></th>
                    <th class="table-primary"><?php echo $row['productoBit'] ?></th>
                    <th class="table-primary"><?php echo $row['numeroBit'] ?></th>
                    
                    
                    <br>
                </tr>
                
            <?php
            }
            ?>
        </tbody>


        </table>
            <a class="btn btn-dark m-3" href="../index.php">Salir</a>

            <a class="btn btn-dark m-3" href="RegBitacora.php">Agregar Vendedor</a>

        </div>
        </div>
</section>
    <!-- Fin contenido -->
<br>
<br>
<br>
<?php
include '../includes/footer.php'
?>
</body>
</html>