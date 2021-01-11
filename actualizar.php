<?php
include("basedatos.php");
$conexionbd=conectar_bd();

if(!empty($_POST["id"])){

    $query="UPDATE camaras SET id='$_POST[id]', nombre='$_POST[nombre]', ip='$_POST[ip]',
    modelo='$_POST[modelo]' tipo='$_POST[tipo]' WHERE id=$_POST[id]";
    
    $exito=mysqli_query($conexionbd, $query);    

            if($exito){ 
                header ('Location: index.php');
                
            } 
            else{
             echo  "Fallo la actualizacion";
            }
}

else{
    echo "No se premiten datos VACIOS..";
}
mysqli_close($conexionbd);
?>
