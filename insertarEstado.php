<?php
include "conexion.php";

$numero=$_POST['numero'];
$estado=$_POST['estado'];




try {

  
  
  $sql = "INSERT INTO entidad (numero, estado)
  VALUES ('$numero', '$estado')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}


?>
