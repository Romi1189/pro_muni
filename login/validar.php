<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['password'];
session_start();
$_SESSION['usuario']=$usuario;
$_SESSION['password']=$contraseña;
$conexion=mysqli_connect("localhost","root","","muni23");

$consulta="SELECT*FROM usuarios where usuario='$usuario' and password='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:AdminLTE-3.2.0/iframe.php");

}else{
    ?>
    <?php
    include("index.html");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);