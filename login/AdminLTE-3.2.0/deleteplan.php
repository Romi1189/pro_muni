<?php

require_once('conexion.php');
$id=$_GET['id'];
$m="";
if (isset($id)) {
	

$query="UPDATE planilla SET estado = 0 WHERE id_plan = '$id'  ";
$result=mysqli_query($conn,$query);
if ($result) {
	$m='<h1>El registro de la planilla fue borrado exitosamente.</h1>';
}
else{
	$m='<h1> Ocurrio  un error durante la eliminación.</h1>';
}
}
echo $m;
require_once('cierre.php');
?>