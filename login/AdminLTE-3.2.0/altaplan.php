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
    <a href="index4.php">
	<button class="btn btn-primary btn-block" type="button"> Cargar Planilla</button></a>
	</div>
	</div>
<?php
require_once('conexion.php');
mysqli_set_charset($conn,"utf8");
?>

<h2>Datos  </h2>
<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12"> 
<table class="table table-striped">
	
	<thead>
		<tr>
			<th>Id</th>
		
			<th>Mes</th>
			<th>Año</th>
			<th>N° Expediente</th>
			
			<th colspan="2">Opciones</th>
		</tr>
	</thead>

	<?php
	$sql="SELECT * FROM persona WHERE dni = ";
	$sql="SELECT * FROM planilla  WHERE estado = 1";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result)>0) {
		while ($row = mysqli_fetch_assoc ($result)) {
			?>
			<tr>
				<td><?php echo $row['id_plan'];?></td>
				<td><?php echo $row['mes'];?></td>
				<td><?php echo $row['anio'];?></td>
				<td><?php echo $row['numero_exp'];?></td>
				
				<td><a href="index8.php?id=<?php echo $row['id_plan'];?>"><button class="btn btn-warning btn-block" type="button">Editar</button></a></td>
				<td><a href="index9.php?id=<?php echo $row['id_plan'];?>" onClick="return confirm('Seguro de esta acción? ID  <?php echo $row['id_plan'];?>Será eliminado y una vez eliminado no se podrá recuperar')"><button class="btn btn-danger btn-block" type="button" >Eliminar</button></a></td>

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