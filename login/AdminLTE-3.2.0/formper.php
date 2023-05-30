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

	<h2>Nuevo Registro</h2>
	<label>Nombre:</label>
	<input class="form-control" type="text" name="nombre1"><br>
	<label>Segundo Nombre:</label>
	<input class="form-control" type="text" name="nombre2"><br>
	<label>Apellido:</label>
	<input class="form-control" type="text" name="apellido1"><br>
	<label>Segundo Apellido:</label>
	<input class="form-control" type="text" name="apellido2"><br>
	<label>Sexo:</label>
	<input class="form-control" type="text" name="sexo"><br>
    <label>DNI:</label>
	<input class="form-control" type="numero" name="dni"><br>
	<label>Cuil:</label>
	<input class="form-control" type="numero" name="cuil"><br>
	<label>Dirección:</label>
	<input class="form-control" type="text" name="direccion"><br>
	<label>Contacto:</label>
	<input class="form-control" type="numero" name="contacto"><br>
	<label>Correo:</label>
	<input class="form-control" type="email" name="correo"><br>
	<label>Categoria:</label>
	<input class="form-control" type="numero" name="categoria"><br>
	<label>Cargo:</label>
	<input class="form-control" type="text" name="cargo"><br>
	<label>Sector:</label>
	<input class="form-control" type="numero" name="sector"><br>
	<label>Estado:</label>
	<input class="form-control" type="texto" name="persona_estado"><br>
	
	
	<input class="btn btn-primary btn-block"  type="submit" name="ok"value="Enviar">
	
</form>
	</div>

<?php
if (isset($_POST['nombre1'])) {

$nombre1=$_POST['nombre1'];
$nombre2=$_POST['nombre2'];
$ap1=$_POST['apellido1'];
$ape2=$_POST['apellido2'];
$sexo=$_POST['sexo'];
$dni=$_POST['dni'];
$cuil=$_POST['cuil'];
$direccion=$_POST['direccion'];
$contacto=$_POST['contacto'];
$correo=$_POST['correo'];
$cate=$_POST['categoria'];
$cargo=$_POST['cargo'];
$sector=$_POST['sector'];
$pe=$_POST['persona_estado'];


require_once ('conexion.php');

mysqli_set_charset($conn,"utf8");
$insercion = "INSERT INTO persona (nombre1, nombre2, apellido1, apellido2, sexo, dni, cuil, direccion, contacto, correo, categoria, cargo, sector, persona_estado) 
VALUES('$nombre1','$nombre2','$ap1','$ape2','$sexo','$dni','$cuil','$direccion','$contacto','$correo','$cate','$cargo','$sector','$pe')";

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