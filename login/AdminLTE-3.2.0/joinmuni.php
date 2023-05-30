<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8" />
	<title></title>
</head>
<body>
<?php
require_once ('conexion.php');
mysqli_set_charset($conn,"utf8");
//SE UTILIZA LA PALABRA AS EN LA CONSULTA SQL PARA REDEFINIR EL ATRIBUTO Y ASI USARLO LUEGO EN LA CREACION DE LA TABLA
$sql = "
	SELECT persona.id AS idp, nombre, apellido, planilla.numero_exp AS plaex, planilla.mes AS plame, planilla.anio AS planio 
	FROM persona, planilla, per_plan 
	WHERE per_plan.id_persona=persona.id 
	AND per_plan.id_plan=planilla.id
	ORDER BY per_plan.id
	";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
echo "
<p>Listado de Pedidos</p>
<table border='1'>
<tr>
<td><b>Identificador</b></td>
<td><b>Total</b></td>
<td><b>Fecha</b></td>
<td><b>Cliente</b></td>
<td><b>Vendedor</b></td>
</tr>
";
while($row = mysqli_fetch_assoc($result)) {
?>
<tr>
<td><?php echo $row['idp'];?></td>
<td><?php echo $row['total'];?></td>
<td><?php echo $row['fecha'];?></td>
<td><?php echo $row['cliape'];?></td>
<td><?php echo $row['comape'];?></td>
</tr>
<?php
  }
} else {
  echo "0 Resultados";
}
require_once ('cierre.php');
?>
</body>
</html>
