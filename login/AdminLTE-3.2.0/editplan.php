<?php
require_once('conexion.php');
mysqli_set_charset($conn,"utf8");
$id = $_GET['id'];
$msg = "";
$mes = $anio= $num = "";
if (isset($_POST['submit'])) {
    if (isset($_POST['mes'])) {
        $mes =  $_POST['mes'];
    }
    if (isset($_POST['anio'])) {
        $anio =  $_POST['anio'];
    }
    if (isset($_POST['hoja'])) {
        $num =  $_POST['hoja'];
    }

    $query = "UPDATE  planilla SET mes = '$mes',  anio = '$anio', hoja = '$num'
            WHERE id_img= '$id'";
    $result = mysqli_query($conn, $query);
    if ($result) {
       echo" 
       <input type='checkbox' id='btn-modal1'>
       <div class='container-modal'>
       <div class='content-modal'>
       <h2>¡¡¡Actualización exitosa!!! </h2>  
       <div class='btn-cerrar'>
       <label for='btn-modal1'><a href='index31.php'>Cerrar</a></label>
       </div>
       </div>
       <label for='btn-modal1' class='cerrar-modal'></label>
       </div>";        
    } else {
        echo" 
        <input type='checkbox' id='btn-modal1'>
        <div class='container-modal'>
        <div class='content-modal'>
        <h2>¡¡¡Error al actualizar!!! </h2>  
        <div class='btn-cerrar'>
        <label for='btn-modal1'><a href='in_dex.php'>Cerrar</a></label>
        </div>
        </div>
        <label for='btn-modal1' class='cerrar-modal'></label>
        </div>";
    }
}
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar registro</title>
</head>

<body>    
                <span><?php echo $msg; ?></span>
                <?php
                $query  = "SELECT * FROM planilla WHERE id_img= '$id'";
                $result  = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <h2>Editar registro de Planilla:</h2>
                    <form action="" method="post">
                        <label>Mes:</label>
                        <input type="text" name="mes" value="<?php echo $row['mes']; ?>">
                        <label>Año:</label>
                        <input type="number" name="anio" value="<?php echo $row['anio']; ?>">
                        <label>N° Hoja:</label>
                        <input type="number" name="hoja" value="<?php echo $row['hoja']; ?>">
                  
                <img src="<?php echo $row['img'];?>" width=500px heigth=auto>
                        <p></p>
                        
                        <button type="submit" name="submit">Guardar cambios</button>       
                        <button><a href="index31.php">Volver</a></button>            
                    </form><p>
                <?php
                }
                ?>
                           
</body>
<?php
require_once('cierre.php');
?>
</html>