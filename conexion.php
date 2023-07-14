<?php
$servername = "localhost";
//$username = "tu_usuario";
$username = "root";
//$password = "tu_contrasena";
$password = "12345678";
//$dbname = "tu_base_de_datos";
$dbname = "ferreteria";







try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Conexión exitosa";
} catch(PDOException $e) {
  echo "Error en la conexión: " . $e->getMessage();
}
?>

