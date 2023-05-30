<?php 
$id=$_GET['id'];
include '../config/bd.php';
$conexion=conexion();
$query=eliminar($conexion,$id);
if($query){
 header('location:../index31.php?eliminar=success');
}else{
    header('location:../index31.php?eliminar=error');
}
?>