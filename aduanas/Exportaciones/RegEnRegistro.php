<?php


$nombre = $_POST['NomEx'];
$rfc = $_POST['rfcEx'];
$trasnporte = $_POST['TransEx'];
$sede = $_POST['SedeEx'];

//echo "Email: $email". "Usuario: $username". "Contra: $contra ";

//include '../DB/DB2.php';
include '../DB/Local.php';


if($connection->connect_error){
    die("Falló la conexión: ". $connect_error);
}
$sql = "INSERT INTO Registro (nombreExp, rfcExp, TranspExp, sedeExp) VALUES ('$nombre', '$rfc', '$transporte', '$sede')";

if($connection->query($sql)== TRUE){
    echo "Nuevo registro agregado exitosamente!";
    header('Location: Registro.php');
}else{
    echo "Error: " . $sql . "<br>" . $connection->error;
}
    #Conectar y ejecutar instruccion
//cerrar conexion
$connection->close();


?>