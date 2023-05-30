<?php 
function conexion(){
    $con=mysqli_connect('localhost','root','','muni23');
    return $con;
}

function listar($conexion){
    $sql="SELECT * FROM archivo";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function insertar($conexion,$mes,$anio,$nombre,$categoria,$fecha,$tipo,$archivoBLOB){
    $sql="INSERT INTO archivo(mes,anio,categoria,nombre,fecha,tipo,archivo) VALUES('$mes','$anio','$categoria','$nombre','$fecha','$tipo','$archivoBLOB')";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function eliminar($conexion,$id){
    $sql="DELETE from archivo WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function datos($conexion,$id){
    $sql="SELECT * FROM archivo WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    $datos=mysqli_fetch_assoc($query);
    return $datos;
}
function editarNombre($conexion,$id,$nombre){
    $sql="UPDATE archivo SET nombre='$nombre' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function editarArchivo($conexion,$id,$mes,$anio,$categoria,$tipo,$fecha,$archivoBLOB){
    $sql="UPDATE archivo SET $mes='mes', $anio='anio',categoria='$categoria',tipo='$tipo',fecha='$fecha',archivo='$archivoBLOB' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function editar($conexion,$id,$mes,$anio,$nombre,$categoria,$tipo,$fecha,$archivoBLOB){
    $sql="UPDATE archivo SET $mes='mes', $anio='anio', nombre='$nombre', categoria='$categoria',tipo='$tipo',fecha='$fecha',archivo='$archivoBLOB' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}

?>