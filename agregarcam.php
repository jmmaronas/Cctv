<?php
include("basedatos.php");
$conexionbd=conectar_bd();

$nombre=$_POST["nombre"];
$ip=$_POST["ip"];
$modelo=$_POST["modelo"];

$query= "INSERT INTO camaras(id,nombre, ip, modelo) VALUES ('$nombre','$ip','$modelo')";
  
$exito=mysqli_query($conexionbd, $query);

mysqli_close($conexionbd);
?>