<?php 
    
    include "conexion.php";
    $id=$_GET['id'];
    $sql="SELECT * FROM planilla WHERE id_img='$id'";
    $resultado=mysqli_query($conn,$sql);
    if(mysqli_num_rows($resultado)==1){
        $fila=mysqli_fetch_assoc($resultado);
        $foto=$fila['img'];
        $ruta="fotosmuni/".$foto;
        if(file_exists($ruta)){
            header("content-type: application/octet-stream");
            header("content-disposition:attachment: filename=".$foto);
            readfile(($ruta));
        }else{
            echo "El archivo no existe en el servidor";
        }

    }else{
        echo "El archivo no se encontro en la base de datos";
    }
 
  
?>