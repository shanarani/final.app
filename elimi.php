<?php
include "conexion.php";

$numero=$_POST['numero'];


try {
  

  // sql to delete a record
  $sql = "DELETE FROM entidad WHERE numero='$numero'";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Record deleted successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

echo "se eliminara el estado del numero:  ".$numero;


?>