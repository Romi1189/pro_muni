<?php

require_once "../conexion.php";
$sql = "SELECT * FROM persona";
$resultado = $mysqli->query($sql);

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte</title>
</head>

<body>

    <h2>Generar Reportes del Municipio</h2>
    <form action="reporte.php" method="post" autocomplete="off">

        Ingresa los datos
        <select id="persona" name="persona">
            <option value="">Selecciona una opcion</option>
            <?php while ($fila = $resultado->fetch_assoc()) { ?>
                <option value="<?php echo $fila['id_persona']; ?>"><?php echo $fila['id_persona']; ?></option>
            <?php } ?>
        </select>

        <br />

        <button type="submit">Generar</button>

    </form>

</body>
</html>