<?php
require_once ("conexion.php");
$hoja=$_POST['hoja'];
$mes=$_POST['mes'];
$anio=$_POST['anio'];
$img='';
if(isset($_FILES['archivo'])){
    $file=$_FILES["archivo"];
    $nom=$file["name"];
    $tipo=$file["type"];
    $ruta=$file["tmp_name"];
    $size=$file["size"];
    $dimension=getimagesize($ruta);
    $width=$dimension[0];
    $height=$dimension[1];
    $carpeta="fotosmuni/";
    if ($tipo !='image/jpg' && $tipo !='image/JPG' && $tipo !='image/jpeg' && $tipo !='image/png'){
        echo "Error, el archivo no es una imagen.";
    }
    elseif($size> 3*1024*1024){
        echo" Error, el tamaño máximo permitido es de 3MB";
    }else{
        $src=$carpeta.$nom;
        move_uploaded_file($ruta,$src);
        $img="fotosmuni/".$nom;

    }
}
$query =mysqli_query($conn,"INSERT INTO planilla (hoja,mes,anio,img) VALUES('$hoja','$mes','$anio','$img')");

header("location:index31.php");

?>