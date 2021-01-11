<?php
include("getaddres.php");
include("basedatos.php");
$conexionbd=conectar_bd();

$query="SELECT * FROM camaras ";
$datos= mysqli_query($conexionbd, $query);
/*$camaras=mysqli_fetch_array ($datos);*/

while($fila = mysqli_fetch_array($datos)){
    
    $resultado=getaddres($fila["ip"]);
                
    $estado="UPDATE camaras SET serie='$resultado' WHERE id='$fila[id]'";
    $exito=mysqli_query($conexionbd, $estado);   
}


if($exito){
    header('Location: index.php');
                
} 
else{
     echo  "Fallo la actualizacion";
}
mysqli_close($conexionbd);

?>