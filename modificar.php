<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Modificar Camara</title>
</head>
<body>
    <header>
        <h1>Modificar Camara</h1>
    </header>
    <?php
        include("basedatos.php");
        $conexionbd=conectar_bd();
        
        if($_GET["id"]){
            $query="SELECT * FROM camaras WHERE id=".$_GET["id"]."";
            $datos= mysqli_query($conexionbd, $query);
            $camaras=mysqli_fetch_array ($datos);
            
    ?>
            <form action="actualizar.php" method="post" name=Actualizar>
                ID:<?php echo $camaras["id"];?>
                <input type="hidden" value="<?php echo $camaras["id"];?>" name="id"></input>
                <br>
                Nombre:
                <br>
                <input type="text" value="<?php echo $camaras["nombre"];?>" name="nombre"></input>
                <br>
                IP:
                <br>
                <input type="text" value=<?php echo $camaras["ip"];?> name="ip"></input>
                <br>
                Modelo:
                <br>
                <input type="text" value=<?php echo $camaras["modelo"];?> name="modelo"></input>
                <br>
                Tipo:
                <br>
                <input type="text" value=<?php echo $camaras["tipo"];?> name="tipo"></input>
                <br>
                <br>
                <input class="button" type="submit"  name="Actualizar Lista"></input>


            </form>
        <?php
        }
        mysqli_close($conexionbd);
    ?>
    
</body>
</html>