<h2>Datos  </h2>
<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12"> 
<table class="table table-striped">
	
	<thead>
		<tr>
            <th>id</th>
			<th>año</th>
	
			<th colspan="2">Opciones</th>
		</tr>
	</thead>

	<?php
    require_once('conexion.php');
	$sql="SELECT * FROM recibo";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result)>0) {
		while ($row = mysqli_fetch_assoc ($result)) {
			?>
			<tr>
				<td><?php echo $row['id_recibo'];?></td>
				<td><?php echo $row['anio'];?></td></td>               
				<td><a href="index8.php?id=<?php echo $row['id_recibo'];?>"><button class="btn btn-warning btn-block" type="button">Editar</button></a></td>
				<td><a href="index9.php?id=<?php echo $row['id_recibo'];?>" onClick="return confirm('Seguro de esta acción? ID  <?php echo $row['id_plan'];?>Será eliminado y una vez eliminado no se podrá recuperar')"><button class="btn btn-danger btn-block" type="button" >Eliminar</button></a></td>
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
    <div class="d-grid gap-2">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <a href="index4.php">
	<button class="btn btn-primary btn-block" type="button"> Formulario</button></a>
	</div>
	</div>
    </body>
</html>