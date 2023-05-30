<?php

require_once('conexion.php');
$id=$_GET['id'];
$m="";
if (isset($id)) {
	

$query="UPDATE  persona  set estado=0 WHERE id_persona='$id'";
$result=mysqli_query($conn,$query);
if ($result) {
	$m='<h1>El registro  del empleado fue eliminado exitosamente.</h1>';
}
else{
	$m='<h1>Ocurrio durante la eliminación.</h1>';
}
}
echo $m;
require_once('cierre.php');
?>