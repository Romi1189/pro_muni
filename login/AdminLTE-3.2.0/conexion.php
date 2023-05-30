<?php
$servername="localhost";
$username="root";
$password="";
$dbname="muni23";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {
  die("Falló la conexión: " . mysqli_connect_error());
} 

?>