<?php


$nombre = $_POST['NomPro'];
$codigo = $_POST['CodigoPro'];
$peso = $_POST['PesoPro'];
$distri = $_POST['DistriPro'];

//echo "Email: $email". "Usuario: $username". "Contra: $contra ";

//include '../DB/DB2.php';
include '../DB/Local.php';


if($connection->connect_error){
    die("Falló la conexión: ". $connect_error);
}
$sql = "INSERT INTO productos (nombreExp, codigoExp, pesoExp, disExp) VALUES ('$nombre', '$codigo', '$peso', '$distri')";

if($connection->query($sql)== TRUE){
    echo "Nuevo registro agregado exitosamente!";
    header('Location: Productos.php');
}else{
    echo "Error: " . $sql . "<br>" . $connection->error;
}
    #Conectar y ejecutar instruccion
//cerrar conexion
$connection->close();


?>