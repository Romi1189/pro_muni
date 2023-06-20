<?php

require_once('conexion.php');
$id=$_GET['id'];
$m="";
if (isset($id)) {
	

$query="DELETE FROM planilla  WHERE id_img = '$id'  ";
$result=mysqli_query($conn,$query);
if ($result) {
	header("location:index31.php");
}
else{
	$m='<h1> Ocurrio  un error durante la eliminación.</h1>';
}
}
echo $m;
require_once('cierre.php');
?>