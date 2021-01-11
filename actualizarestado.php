<?php
include("ping.php");
include("basedatos.php");
$conexionbd=conectar_bd();

$query="SELECT * FROM camaras ";
$datos= mysqli_query($conexionbd, $query);
/*$camaras=mysqli_fetch_array ($datos);*/

while($fila = mysqli_fetch_array($datos)){
    /*$ip_addr = $fila['ip'] ; */
        if ((new CheckDevice())->ping($fila["ip"])){
            $estado="ACTIVA";
            /*if(!empty($fila["id_camaras"])){
            }*/
        }
        else{
            $estado="CAIDA";
            /*if(!empty($fila["id_camaras"])){
            $caida="UPDATE camaras SET estado=CAIDA WHERE id='$fila[id]'";
            $exito=mysqli_query($conexionbd, $caida);   
            mysqli_close($conexionbd);
            echo $fila["ip"];*/
            }
        $activa="UPDATE camaras SET estado='$estado' WHERE id='$fila[id]'";
        $exito=mysqli_query($conexionbd, $activa);   
        /*mysqli_close($conexionbd);*/     
        
}

if($exito){
    header ('Location: index.php');
                
} 
else{
     echo  "Fallo la actualizacion";
}
mysqli_close($conexionbd);

?>