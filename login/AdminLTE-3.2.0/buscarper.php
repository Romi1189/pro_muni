<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Búsqueda </title>


<meta http-equiv="Content-Type" content=text/html; charset="utf-8"/>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>
<body>
	<header>
<?php 

include ("bus.php");
?>
</header>
<?php 
if (isset($_POST['persona'])) {
$buscar = $_POST['persona'];
include_once ( 'conexion.php');
//mysql_set_charset('utf8');
mysqli_set_charset($conn,"utf8");
$sql = "SELECT * FROM persona  where (nombre1 like '%$buscar%') or( apellido1 like '%$buscar%' )  ORDER BY apellido1";?>
		<br><br><br>
		<div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
		<table class="table table-striped">
		<thead>
		   <tr>
			   <th>Nombres</th>
			   <th>Apellidos</th>
			   <th>Sexo</th>
			   <th>DNI</th>
			   <th>Cuil</th>
			   <th>Dirección</th>
			   <th>Contacto</th>
			   <th>Correo</th>
			   <th>Categoría</th>
			   <th>Cargo</th>
			   <th>Sector</th>
			   <th>Estado</th>
		   </tr>
		   </thead>
		   <?php
$resultado = mysqli_query($conn, $sql);
if (mysqli_num_rows($resultado) > 0) {
	while($row = mysqli_fetch_assoc($resultado)) {
    		echo "<tr> ";
			echo "<td>". $row["nombre1"]. " ".$row["nombre2"]."</td>";
    		echo"<td>". $row["apellido1"]. " " . $row["apellido2"]."</td>";
			echo "<td>". $row["sexo"]."</td>";
			echo" <td>". $row["dni"]."</td>";
			echo "<td>". $row["cuil"]."</td>";
			echo "<td>". $row["direccion"]."</td>";
			echo "<td>". $row["contacto"]."</td>";
			echo "<td>". $row["correo"]."</td>";
			echo "<td>". $row["categoria"]."</td>";
			echo "<td>". $row["cargo"]."</td>";
			echo "<td>". $row["sector"]."</td>";
    		echo "<td>". $row["persona_estado"]."</td>";
    		
			echo "</tr>";
  }
} else {
  echo "Su búsqueda recoge 0 resultados";
  
}
include_once ("cierre.php");
}
?>
</table>
		</div>
</body>
</html>
