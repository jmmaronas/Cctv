<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Camaras</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<header>
    <h1>Listado de Camaras</h1>
</header>

<nav>
    <a class="button" type="button" href="nuevacam.php">Agregar Camara</a>
    <a class="button" type="button" href="actualizarMAC.php">Mostrar MAC</a>
    <a class="button" type="button" href="actualizarestado.php">Estado</a>
    <a class="button" type="button" href="seleccionar.php">Seleccionar</a>
    <input type="search" name="buscador" placeholder="Buscar.." >
    
</nav>

<table class="table table-bordered">
      <thead>
        <tr>
          <th>#</th>
          <th>Nombres</th>
          <th>IP</th>
          <th>Modelo</th>
          <th>Tipo</th>
          <th>Estado</th>
          <th>Numero de Serie</th>
          <th>Accion</th>
        </tr>
      </thead>
      <tbody>

<?php

include("basedatos.php");

$conexionbd=conectar_bd();

$query = "SELECT * FROM camaras";
$result = mysqli_query($conexionbd, $query);

if (mysqli_num_rows($result) > 0) {
    while($fila = mysqli_fetch_assoc($result)){
?>
    <tr id="all_text">
        <td><?php echo $fila["id"];?></td>
        <td><?php echo $fila["nombre"];?></td>
        <td><?php echo $fila["ip"];?></td>
        <td><?php echo $fila["modelo"];?></td>
        <td><?php echo $fila["tipo"];?></td>
        <td><?php echo $fila["estado"];?></td>
        <td><?php echo $fila["serie"];?></td>
        <td><a href="modificar.php?id=<?php echo $fila['id']?>">Modificar</a><br>
        <a href="eliminar.php?id=<?php echo $fila['id']?>">Eliminar</a></td>
    </tr>
<?php    
    }   
} else {
    die("Error: No hay datos en la tabla seleccionada");
}

mysqli_close($conexionbd);
?>
</body>
<script src="jquery/jquery-3.5.1.min.js"></script>
<script src="jquery/buscar.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</html>