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
    $msg= "Edición exitosa";        
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
    <title>Municipalidad de Angaco</title>
</head>

<body>
    <?php
        $query  = "SELECT * FROM persona WHERE id_persona= '$id_per'";
        $result  = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
    ?>

<h2 class="display-5 text-primary text-center">Editar Registro:</h2>

        <div class="container">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>"method="POST">
            <div class="row g-3 mt-3 ">
	            <div class="col-6">
                <label>Nombre</label>
                <input type="text" name="nombre1" value="<?php echo $row['nombre1']; ?>">
            </div>
                
	        <div class="col-6">
                <label> Segundo Nombre</label>
                <input type="text" name="nombre2" value="<?php echo $row['nombre2']; ?>">
            </div>
            <div class="col-6">
                <label>Apellido</label>
                <input type="text" name="apellido1" value="<?php echo $row['apellido1']; ?>">
            </div>
            <div class="col-6">
                <label>Segundo Apellido</label>
                <input type="text" name="apellido2" value="<?php echo $row['apellido2']; ?>">
            </div>
            <div class="col-6">
                <label>DNI</label>
                <input type="numero" name="dni" value="<?php echo $row['dni']; ?>">
            </div>
            <div class="col-6">
                <label>Cuil</label>
                <input type="numero" name="cuil" value="<?php echo $row['cuil']; ?>">
            </div>
            <div class="col-6">
                <label>Sexo</label>
                <select name="sexo" id="sexo" class="form-control">
                    <option value="femenino">Femenino</option>
                    <option value="masculino">Masculino</option>
                    <option value="otros">Otros</option>
                </select>
            </div>
            <div class="col-6">
                <label>Dirección</label>
                <input type="text" name="direccion" value="<?php echo $row['direccion']; ?>">
            </div>
            <div class="col-6">
            <label>Contacto</label>
            <input type="numero" name="contacto" value="<?php echo $row['contacto']; ?>">
            </div>
            <div class="col-6">
            <label>Correo</label>
            <input type="text" name="correo" value="<?php echo $row['correo']; ?>">
            </div>
            <div class="col-6">
            <label>Categoría</label>
            <input type="numero" name="categoria" value="<?php echo $row['categoria']; ?>">
            </div>
            <div class="col-6">
            <label>Cargo</label>
            <select name="cargo" id="cargo" class="form-control">
                <option value="administrativo">Administrativo</option>
                <option value="ordenanza">Ordenanza</option>
                <option value="obrero">Obrero</option>
                <option value="capgen">Capataz General</option>
                <option value="concejal">Concejal</option>
                <option value="seccondel">Secretario Con. Deliberante</option>
                <option value="intendente">Intendente</option>
                
            </select><br>
            </div>
            <div class="col-6">
            <label>Sector</label>
            <select name="sector" id="sector" class="form-control">
                <option value="femenino">Planta Permanente</option>
                <option value="masculino">Contratado</option>
            </select>
            </div>
            <div class="col-6">
            <label>Estado</label>
            <select name="estado" id="estado" class="form-control">
                <option value="activo">Activo</option>
                <option value="jubilado">Jubilado</option>
                <option value="fallecido">Fallecido</option>
            </select>
            <br>
            </div>
            <p></p>
            <div class="col-12">
                <button class="btn btn-success btn-block" type="submit" name="submit"  href="login/AdminLTE-3.2.0/index1.php">Guardar cambios</button>
            </div>             
            </form>

        </div>
                
                    <h2> <span><?php echo $msg; ?></span></h2>
                <?php
                }
                ?>
</body>

<?php
require_once('cierre.php');
?>

</html>