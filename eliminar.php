<?php
include "conexion.php";

$productoId=$_POST['productoId'];


try {
  

  // sql to delete a record
  $sql = "DELETE FROM producto WHERE productoId='$productoId'";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Record deleted successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

echo "se eliminaran todos los datos del id:".$productoId;


?>