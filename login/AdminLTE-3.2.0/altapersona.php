<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Municipalidad de Angaco</title>
	<link rel="stylesheet " href="css/bootstrap.min.css"/>
</head>
<body>
	
<div class="d-grid gap-2">
<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
<a href="index5.php"><button class="btn btn-primary btn-block" type="button">Cargar Personal</button></a>
</div>
</div>
<?php
require_once('conexion.php');
?>

<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">    
<table class="table table-striped">
	
	<thead>
		<tr>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Categoría</th>
			<th>Cargo</th>
			<th>Sector</th>
			<th>Estado</th>
			<th colspan="2"><center>Opciones</center></th>

		</tr>
	</thead>
	<?php
	$sql="SELECT * FROM persona WHERE estado=1 ";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result)>0) {
		while ($row = mysqli_fetch_assoc ($result)) {
			?>
			<tr>
				
				<td><?php echo $row['nombre1'];?>
				 	<?php echo $row['nombre2'];?></td>
				<td><?php echo $row['apellido1'];?>
					<?php echo $row['apellido2'];?></td>
				<td><?php echo $row['categoria'];?></td>
				<td><?php echo $row['cargo'];?></td>
				<td><?php echo $row['sector'];?></td>
				<td><?php echo $row['persona_estado'];?></td>
				<td><a href="index6.php?id= <?php echo $row['id_persona'];?>"><button class="btn btn-warning btn-block" type="button">Editar</button></a></td>
				
				<td><a href="index7.php?id=<?php echo $row['id_persona'];?>" onClick="return confirm('Seguro de esta acción?  <?php echo $row['nombre1']," " ,$row['apellido1'];?> Será eliminado y una vez eliminado no se podrá recuperar')"><button class="btn btn-danger btn-block" type="button" >Eliminar</button></a></td>

			</tr>
			<?php

		}
	}
	?>
</table><p>

    </div>
<?php
require_once('cierre.php');
?>

</body>
</html>