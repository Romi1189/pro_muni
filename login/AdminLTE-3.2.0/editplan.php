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
    if (isset($_POST['numero_exp'])) {
        $num =  $_POST['numero_exp'];
    }


    $query = "UPDATE  planilla
            SET mes = '$mes',  anio = '$anio', numero_exp = '$num' 
            WHERE id_plan= '$id'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        $msg = "Actualización exitosa!";        
    } else {
        $msg = "Error al intentar actualizar los datos.";
    }
}
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar registro de organismo</title>
</head>

<body>    
                <span><?php echo $msg; ?></span>
                <?php
                $query  = "SELECT * FROM planilla WHERE id_plan= '$id'";
                $result  = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <h2>Editar registro de Planilla:</h2>
                    <form action="" method="post">
                        <label>Mes:</label>
                        <input type="text" name="mes" value="<?php echo $row['mes']; ?>">
                        <label>Año:</label>
                        <input type="number" name="anio" value="<?php echo $row['anio']; ?>">
                        <label>N° Exp.:</label>
                        <input type="number" name="numero_exp" value="<?php echo $row['numero_exp']; ?>">
                        <p></p>
                        
                        <button type="submit" name="submit">Guardar cambios</button>                        
                    </form><p>
                <?php
                }
                ?>
                           
</body>
<?php
require_once('cierre.php');
?>
</html>