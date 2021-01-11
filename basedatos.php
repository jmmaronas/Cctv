<?php
function conectar_bd()
{
    $servidor="localhost";
    $nombrebd="cctv";
    $usuario="root";
    $password="";
    //conectar base se datos//
    $conexion=mysqli_connect($servidor,$usuario,$password);
    $base=mysqli_select_db($conexion, $nombrebd);
    
    return $conexion;
}
?>

