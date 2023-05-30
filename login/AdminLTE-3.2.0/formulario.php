<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Municipalidad de Angaco</title>
	<link rel="stylesheet " href="css/bootstrap.min.css"/>
</head>
<body>

<div class="container">
<form action="<?php echo $_SERVER['PHP_SELF'];?>"method="POST">

	<h2>Cargar Planilla</h2>
	<br>
	
	<label>Mes:</label>
	<input class="form-control" type="text" name="mes"><br>
	<label>Año:</label>
	<input class="form-control" type="number" name="anio"><br>
	<label>N° Expe.:</label>
	<input class="form-control" type="number" name="numero_exp"><br>
	
	
	<input class="btn btn-primary btn-block" type="submit" name="ok"value="Enviar">
	
</form>
</div>

<?php
if (isset($_POST['mes'])) {
	

$mes=$_POST['mes'];
$anio=$_POST['anio'];
$ne=$_POST['numero_exp'];

require_once ('conexion.php');

mysqli_set_charset($conn,"utf8");
$insercion = "INSERT INTO planilla (mes, anio,numero_exp) VALUES('$mes','$anio','$ne')";

if (($result=mysqli_query($conn,$insercion))===false) {
	die(mysqli_error($conn));
}

else{
	echo "<h3>Nuevo registro creado</h><p>";

}

require_once ('cierre.php');
 }

?>

</body>
</html>