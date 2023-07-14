<?php
include "conexion.php";
echo"<center>";
echo"<table border='3'>";
echo"<tr><th><font color='orange'>Producto ID</th><th><font color='orange'>Nombre</th><th><font color='orange'>Precio</th><th><font color='orange'>cantidad</th><th><font color='orange'>imagen</th></tr>";
try{
    $sql=$conn->prepare("SELECT * FROM producto");
    $sql->execute();
    $sqll=$conn->prepare("SELECT * FROM entidad");
    $sqll->execute();
    while($row=$sql->fetch(PDO::FETCH_ASSOC)){
        echo"<tr><td>";
        echo "<input type='checkbox' name='productoid[ ]' value='".$row["productoid"]."'>";
        echo $row["productoid"]."</td><td>";
        echo $row["nombre"]."</td><td>";
        echo $row["precio"]."</td><td>";

        echo "<input type='number' name='cantidad[ ]' value='".$row["cantidad"]."' >";
        echo $row["cantidad"]."</td><td>";
        
        
        echo"<img src='".$row["imagen"]."' width='70' height='70'><br>";
       
        
        
        
        echo "<font color='orange'><input type='hidden' name='precio[ ]' value='".$row["precio"]."' >";
        
       
       


        echo"</td></tr>";
    }
    echo"</table>";

    echo"<font color='blue'><h2>ESTADOS</h2></font>";
    echo"<font color='red'><h3>escoge el estado deseado<h3></font>";
    echo"<select class='controls' name='entidad[]'>";

    while($law=$sqll->fetch(PDO::FETCH_ASSOC)){
        echo "<option value='".$law["estado"]."'.>".$law["estado"]."</option>";

    }


}
 catch(PDOException $e) {
        echo"Error:".$e->getMessage();
    }
    echo"</select>";
?>
<br><br>
<a href=insertar.html><input class="btn" type="button" value="eliminar, modificar o insertar producto"></a>
<a href=insertarE.html><input class="btn" type="button" value="insertar o eliminar entidad"></a>



</form>
