<?php
include "conexion.php";

$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$imagen=$_POST['imagen'];



try {

  
  
  $sql = "INSERT INTO producto (nombre, precio, imagen)
  VALUES ('$nombre', '$precio', '$imagen')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}


?>
