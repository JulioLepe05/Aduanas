<?php


$nombre = $_POST['nomAd'];
$codigo = $_POST['Cod'];
$producto = $_POST['Prod'];
$numero = $_POST['Num'];

//echo "Email: $email". "Usuario: $username". "Contra: $contra ";

//include '../DB/DB1.php';
include '../DB/Local.php';

if($connection->connect_error){
    die("Falló la conexión: ". $connect_error);
}
$sql = "INSERT INTO bitacora (nombreBit, codigoBit, productoBit, numeroBit) VALUES ('$nombre', '$codigo', '$producto', '$numero')";

if($connection->query($sql)== TRUE){
    echo "Nuevo registro agregado exitosamente!";
    header('Location: Bitacora.php');
}else{
    echo "Error: " . $sql . "<br>" . $connection->error;
}
    #Conectar y ejecutar instruccion
//cerrar conexion
$connection->close();


?>