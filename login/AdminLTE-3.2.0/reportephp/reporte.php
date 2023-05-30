<?php

require "../conexion.php";


if (!empty($_POST)) {

    $mes = $_POST['id_persona'];

    $sql="SELECT * FROM persona WHERE estado=1 ";
    $resultado = $mysqli->query($sql);

    $pdf = new PDF("P", "mm", "letter");
    $pdf->AliasNbPages();
    $pdf->SetMargins(10, 10, 10);
    $pdf->AddPage();

    $pdf->SetFont("Arial", "B", 9);

    $pdf->Cell(10, 5, "id_persona", 1, 0, "C");
    $pdf->Cell(40, 5, "nombre1", 1, 0, "C");
    $pdf->Cell(40, 5, "nombre2", 1, 0, "C");
    $pdf->Cell(20, 5, "apellido1", 1, 0, "C");
    $pdf->Cell(20, 5, "apellido2", 1, 0, "C");
    $pdf->Cell(40, 5, "dni", 1, 0, "C");
    $pdf->Cell(30, 5, "categoria", 1, 0, "C");
    

    $pdf->SetFont("Arial", "", 9);

    while ($fila = $resultado->fetch_assoc()) {
        $pdf->Cell(10, 5, $fila['id_persona'], 1, 0, "C");
        $pdf->Cell(40, 5, utf8_decode($fila['nombre1']), 1, 0, "C");
        $pdf->Cell(40, 5, utf8_decode($fila['nombre2']), 1, 0, "C");
        $pdf->Cell(40, 5, utf8_decode($fila['apellido1']), 1, 0, "C");
        $pdf->Cell(40, 5, utf8_decode($fila['apellido2']), 1, 0, "C");
        $pdf->Cell(20, 5, $fila['dni'], 1, 0, "C");
        $pdf->Cell(10, 5, $fila['categoria'], 1, 0, "C");
     
        
    }
    $pdf->Output();
}
