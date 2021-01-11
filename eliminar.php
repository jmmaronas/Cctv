<?php
    if()
    /*  include("basedatos.php");
        $conexionbd=conectar_bd();
        
        
        $query="DELETE FROM camaras WHERE id=".$_GET['id']."";
        $exito=mysqli_query($conexionbd, $query);
        if($exito){
            header('location: index.php');
        }
        else{
            echo "Fallo la Operacion";
        }
    mysqli_close($conexionbd);*/

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Eliminar Camara</title>
</head>
<body>
    <h1>Eliminar Camara</h1>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post"></form>
        <P>Se dispone a eliminar una camara, esta seguro?</P>
        <input type="submit" value="CONFIRMA" name="si"></input>
        <button type="submit" value="CANCELAR" name="no"></button>
        
    
    
</body>
</html>