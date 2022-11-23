<?php

// Create connection
//include '../DB/DB2.php';
include '../DB/Local.php';
// Check connection
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}

// sql to delete a record
$codigo = $_GET['idEmpleado'];
$sql = "DELETE FROM empleados WHERE idEmpleado=$codigo";

if ($connection->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header('Location: Empleados.php');
} else {
  echo "Error deleting record: " . $connection->error;
}

$connection->close();
?>