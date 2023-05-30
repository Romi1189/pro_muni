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

mysqli_set_charset($conn,"utf8");

$pag= 2;
if (isset($_GET['pagina'])){
	$pagina= $_GET['pagina'];
}else{
	$pagina=1;
}
$comenzar= $pagina  * $pag;
$query = "SELECT * FROM persona LIMIT $comenzar, $pag";
$result= mysqli_query($conn,$query);
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
				<td><a href="index6.php?id=<?php echo $row['id_persona'];?>"><button class="btn btn-warning btn-block" type="button">Editar</button></a></td>
				
				<td><a href="index7.php?id=<?php echo $row['id_persona'];?>" onClick="return confirm('Seguro de esta acción? ID <?php echo $row['id_persona'];?>Será eliminado y una vez eliminado no se podrá recuperar')"><button class="btn btn-danger btn-block" type="button" >Eliminar</button></a></td>

			</tr>
			<?php

		}
	}
	?>
</table><p>

    </div>
	
		<?php
	$query="SELECT * FROM persona";
	$result= mysqli_query($conn,$query);
	$total= mysqli_num_rows($result);
	$total= ceil($total / $pag);
	?>
	<nav aria-label="Page navigation example">
		<ul class="pagination">
		<li class="page-item <?php echo $_GET['pagina']<=1? 'disabled' : '' ?>">
			<a class="page-link" href=" index1.php?pagina=<?php echo $_GET['pagina']-1 ?> "> Anterior</a>
		</li>
		<?php
	
	for ($i=0; $i < $total; $i++):?>
	<li class="page-item <?php  echo $_GET['pagina']==$i+1 ? 'active' : ''?>"><a class="page-link" href="index1.php?pagina=<?php echo $i+1?>">
		<?php echo $i+1?>
	</a></li>
<?php endfor ?>


<li class="page-item <?php echo $_GET['pagina']>=$pag? 'disabled' : '' ?>"><a class="page-link" href="index1.php?pagina=<?php echo $_GET['pagina']+1 ?> ">Siguiente</a></li>
		</ul>		
</nav>
<?php
require_once('cierre.php');
?>

</body>
</html>