<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

  <link rel="stylesheet" type="text/css" href="css/formper.css">
  <title>Municipalidad de Angaco</title>

</head>

<body>
	<div class="container">
    <form action="<?php echo $_SERVER['PHP_SELF'];?>"method="POST">
	<h2 class="display-5 text-primary text-center">Nuevo Registro:</h2>
	
	<div class="row g-3 mt-3 ">
	<div class="col-6">
	<label>Nombre:</label>
	<input class="form-control" type="text" name="nombre1">
	</div>
	<div class="col-6">
	<label>Segundo Nombre:</label>
	<input class="form-control" type="text" name="nombre2">
	</div>
	<div class="col-6">
	<label>Apellido:</label>
	<input class="form-control" type="text" name="apellido1">
	</div>
	<div class="col-6">
	<label>Segundo Apellido:</label>
	<input class="form-control" type="text" name="apellido2">
    </div>
	<div class="col-3">
    <label>DNI:</label>
	<input class="form-control" type="numero" name="dni">
    </div>
	<div class="col-3">
	<label>Cuil:</label>
	<input class="form-control" type="numero" name="cuil"><br>
	</div>
	<div class="col-6">
	<label>Sexo:</label>
	<select name="sexo" id="sexo" class="form-control">
        <option value="femenino">Femenino</option>
        <option value="masculino">Masculino</option>
        <option value="otros">Otros</option>
    </select>
	</div>
	<div class="col-6">
	<label>Dirección:</label>
	<input class="form-control" type="text" name="direccion">
    </div>
	<div class="col-6">
	<label>Contacto:</label>
	<input class="form-control" type="numero" name="contacto">
    </div>
	<div class="col-12">
	<label>Correo:</label>
	<input class="form-control" type="email" name="correo"> 
    </div>
	<div class="col-6">
	<label>Categoria:</label>
	<input class="form-control" type="numero" name="categoria">
	</div>
	<div class="col-6">
	<label>Cargo:</label>
	<select name="cargo" id="cargo" class="form-control">
                <option value="administrativo">Administrativo</option>
                <option value="ordenanza">Ordenanza</option>
                <option value="obrero">Obrero</option>
                <option value="capgen">Capataz General</option>
                <option value="concejal">Concejal</option>
                <option value="seccondel">Secretario Con. Deliberante</option>
                <option value="intendente">Intendente</option>
                
            </select><br>
    </div>
	<div class="col-6">
	<label>Sector:</label>
	<select name="sector" id="sector" class="form-control">
        <option value="femenino">Planta Permanente</option>
        <option value="masculino">Contratado</option>
    </select>
    </div>
	<div class="col-6">
	<label>Estado:</label>
	<select name="persona_estado" id="persona_estado" class="form-control">
        <option value="femenino">Activo</option>
        <option value="masculino">Jubilado</option>
		<option value="masculino">Fallecido</option>
    </select>
	<br>
	</div>
	<div class="col-12">
	<input class="btn btn-primary btn-block"  type="submit" name="ok"value="Enviar">
	</div>
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
</div>
</body>
</html>