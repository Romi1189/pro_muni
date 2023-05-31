<?php

require "conexion.php";

require_once "pdf2.php";
if (!empty($_POST)) {
   
    $id = $_POST['persona'];

    $sql="SELECT nombre1,apellido1,categoria,sector,cargo FROM persona WHERE nombre1='$id'";
    $resultado = $mysqli->query($sql);
   
    $pdf = new PDF("P", "mm", "letter");
    $pdf->AliasNbPages();
    $pdf->SetMargins(8, 8, 8);
    $pdf->AddPage();

    $pdf->SetFont("Arial", "B", 9);

    $pdf->Cell(40, 5, "nombre1", 1, 0, "C");
    
    $pdf->Cell(20, 5, "apellido1", 1, 0, "C");
   
    $pdf->Cell(40, 5, "sector", 1, 0, "C");
    $pdf->Cell(40, 5, "cargo", 1, 0, "C");
    $pdf->Cell(30, 5, "categoria", 1, 0, "C");
    

    $pdf->SetFont("Arial", "", 9);

    while ($fila = $resultado->fetch_assoc()) {
        
        $pdf->Cell(40, 5, $fila['nombre1'], 1, 0, "C");
     
        $pdf->Cell(40, 5, $fila['apellido1'], 1, 0, "C");
        
        $pdf->Cell(40, 5, $fila['sector'], 1, 0, "C");
        $pdf->Cell(40, 5, $fila['cargo'], 1, 0, "C");
        $pdf->Cell(40, 5, $fila['categoria'], 1, 0, "C");
     
        
    }
    $pdf->Output();
}
