<?php

require_once('conexion.php');
mysqli_set_charset($conn,"utf8");
$id_per = $_GET['id'];
$msg = "";
$nom1= $nom2= $ape1= $ape2= $sexo= $dni= $cuil= $dire= $co= $correo= $per= $cargo= $sector= 
$cate= "";
if (isset($_POST['submit'])) {
    
    if (isset($_POST['nombre1'])) {
        $nom1 =  $_POST['nombre1'];
    }
    if (isset($_POST['nombre2'])) {
        $nom2 =  $_POST['nombre2'];
    }
    if (isset($_POST['apellido1'])) {
        $ape1 =  $_POST['apellido1'];
    }
    if (isset($_POST['apellido2'])) {
        $ape2 =  $_POST['apellido2'];
    }
    if (isset($_POST['sexo'])) {
        $sexo =  $_POST['sexo'];
    }
    if (isset($_POST['dni'])) {
        $dni =  $_POST['dni'];
    }
    if (isset($_POST['cuil'])) {
        $cuil =  $_POST['cuil'];
    }
    if (isset($_POST['direccion'])) {
        $dire =  $_POST['direccion'];
    }
    if (isset($_POST['contacto'])) {
        $co =  $_POST['contacto'];
    }
    if (isset($_POST['correo'])) {
        $correo =  $_POST['correo'];
    }
    if (isset($_POST['categoria'])) {
        $cate =  $_POST['categoria'];
    }
    if (isset($_POST['cargo'])) {
        $cargo =  $_POST['cargo'];
    }
    if (isset($_POST['sector'])) {
        $sector =  $_POST['sector'];
    }
    if (isset($_POST['persona_estado'])) {
        $per =  $_POST['persona_estado'];
    }
$query = "UPDATE `persona` SET `nombre1`='$nom1',`nombre2`='$nom2',`apellido1`='$ape1',`apellido2`='$ape2',`sexo`='$sexo',`dni`='$dni',`cuil`='$cuil',`direccion`='$dire',`contacto`='$co',`correo`='$correo',`categoria`='$cate',`cargo`='$cargo',`sector`='$sector',`persona_estado`='$per' WHERE `id_persona`='$id_per' ";
    $result = mysqli_query($conn, $query);
    if ($result) { 
        echo" 
        <input type='checkbox' id='btn-modal1'>
        <div class='container-modal'>
        <div class='content-modal'>
        <h2>¡¡¡Actualización exitosa!!! </h2>  
        <div class='btn-cerrar'>
        <label for='btn-modal1'><a href='index1.php'>Cerrar</a></label>
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
        <label for='btn-modal1'><a href='index6.php'>Cerrar</a></label>
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
    <title>Municipalidad de Angaco</title>
</head>

<body>

                <?php
                $query  = "SELECT * FROM persona WHERE id_persona= '$id_per'";
                $result  = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <h2>Editar registro de persona:</h2>
                    
                    <form action="" method="POST">
                        
                    <label>Nombre</label>
                        <input type="text" name="nombre1" value="<?php echo $row['nombre1']; ?>"><br>
                    <label> Segundo Nombre</label>
                        <input type="text" name="nombre2" value="<?php echo $row['nombre2']; ?>"><br>
                    <label>Apellido</label>
                        <input type="text" name="apellido1" value="<?php echo $row['apellido1']; ?>"><br>
                    <label>Segundo Apellido</label>
                        <input type="text" name="apellido2" value="<?php echo $row['apellido2']; ?>"><br>
                    <label>Sexo</label>
                        <input type="text" name="sexo" value="<?php echo $row['sexo']; ?>"><br>
                    <label>DNI</label>
                        <input type="numero" name="dni" value="<?php echo $row['dni']; ?>"><br>
                    <label>Cuil</label>
                        <input type="numero" name="cuil" value="<?php echo $row['cuil']; ?>"><br>
                    <label>Dirección</label>
                        <input type="text" name="direccion" value="<?php echo $row['direccion']; ?>"><br>
                    <label>Contacto</label>
                        <input type="numero" name="contacto" value="<?php echo $row['contacto']; ?>"><br>
                    <label>Correo</label>
                        <input type="text" name="correo" value="<?php echo $row['correo']; ?>"><br>
                    <label>Categoría</label>
                        <input type="numero" name="categoria" value="<?php echo $row['categoria']; ?>"><br>
                    <label>Cargo</label>
                        <input type="text" name="cargo" value="<?php echo $row['cargo']; ?>"><br>
                    <label>Sector</label>
                        <input type="numero" name="sector" value="<?php echo $row['sector']; ?>"><br>
                    <label>Estado</label>
                        <input type="text" name="persona_estado" value="<?php echo $row['persona_estado']; ?>"><br>
                        <p></p>
                        
                        <button type="submit" name="submit"  href="login/AdminLTE-3.2.0/index1.php">Guardar cambios</button>                        
                    </form><p>
                
                    <h2> <span><?php echo $msg; ?></span></h2>
                <?php
                }
                ?>
</body>

<?php
require_once('cierre.php');
?>

</html>