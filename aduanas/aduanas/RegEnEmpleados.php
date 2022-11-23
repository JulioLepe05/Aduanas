<?php


$nombre = $_POST['NomEm'];
$codigo = $_POST['CodEm'];
$telefono = $_POST['TelEm'];
$curp = $_POST['CurpEm'];

//echo "Email: $email". "Usuario: $username". "Contra: $contra ";

//include '../DB/DB1.php';
include '../DB/Local.php';


if($connection->connect_error){
    die("Falló la conexión: ". $connect_error);
}
$sql = "INSERT INTO empleados (nombreEmp, codigoEmp, telEmp, curpEmp) VALUES ('$nombre', '$codigo', '$telefono', '$curp')";

if($connection->query($sql)== TRUE){
    echo "Nuevo registro agregado exitosamente!";
    header('Location: Empleados.php');
}else{
    echo "Error: " . $sql . "<br>" . $connection->error;
}
    #Conectar y ejecutar instruccion
//cerrar conexion
$connection->close();


?>