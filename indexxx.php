<!DOCTYPE html>
<html>
<head>
	<title>Leer Archivo Excel usando PHP</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<h2>Ejemplo: Leer Archivos Excel con PHP</h2>	
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Resultados de archivo de Excel.</h3>
      </div>
      <div class="panel-body">
        <div class="col-lg-12">
            
<?php
require_once 'PHPExcel/Classes/PHPExcel.php';
$archivo = "01-Sabana.xlsx";
$inputFileType = PHPExcel_IOFactory::identify($archivo);
$objReader = PHPExcel_IOFactory::createReader($inputFileType);
$objPHPExcel = $objReader->load($archivo);
$sheet = $objPHPExcel->getSheet(0); 
$highestRow = $sheet->getHighestRow(); 
$highestColumn = $sheet->getHighestColumn();?>

<table class="table table-bordered">
      <thead>
        <tr>
          <!--<th>#</th>-->
          <th>Nombres</th>
          <th>IP</th>
          <th>Modelo</th>
          <th>Fecha Instalacion</th>
          <th>Estado</th>
          <th>Accion</th>
        </tr>
      </thead>
      <tbody>


<?php
include("basedatos.php");
$conexionbd=conectar_bd();


$num=0;
for ($row = 3; $row <= $highestRow; $row++){ $num++;
  $nombre=$sheet->getCell('A'.$row)->getValue();
  $ip=$sheet->getCell('B'.$row)->getValue();
  $modelo=$sheet->getCell('C'.$row)->getValue();
  

  $query="UPDATE camaras SET tip=
  //$query= "INSERT INTO camaras(id,nombre, ip, modelo) VALUES ('$num','$nombre','$ip','$modelo')";
  
  //$exito=mysqli_query($conexionbd, $query);
?>
       <tr>
          <!--<th scope='row'><?php echo $num;?>-->
          <td><?php echo $sheet->getCell("A".$row)->getValue();?></td>
          <td><?php echo $sheet->getCell("B".$row)->getValue();?></td>
          <td><?php echo $sheet->getCell("C".$row)->getValue();?></td>
          <td><a href="#">Modificar<a></td>
        </tr>
    	
<?php	
}
mysqli_close($conexionbd);

?>
          </tbody>
    </table>
  </div>	
 </div>	
</div>
</body>
</html>
