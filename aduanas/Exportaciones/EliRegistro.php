<?php

// Create connection
//include '../DB/DB2.php';
include '../DB/Local.php';
// Check connection
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}

// sql to delete a record
$codigo = $_GET['idExportacion'];
$sql = "DELETE FROM empleados WHERE idExportacion=$codigo";

if ($connection->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header('Location: Registro.php');
} else {
  echo "Error deleting record: " . $connection->error;
}

$connection->close();
?>