<?php
include "conexion.php";
$productoId=$_POST['productoId'];

$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$imagen=$_POST['imagen'];

try {
  
  $sql = "UPDATE producto SET nombre='$nombre', precio='$precio',imagen='$imagen' WHERE productoId='$productoId'";

  // Prepare statement
  $stmt = $conn->prepare($sql);

  // execute the query
  $stmt->execute();

  // echo a message to say the UPDATE succeeded
  echo $stmt->rowCount() . " records UPDATED successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>