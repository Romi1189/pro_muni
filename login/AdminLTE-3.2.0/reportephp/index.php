<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image("images/logo.png", 10, 5, 13);
    // Arial bold 15
    $this->SetFont('Arial','B',16);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'Reporte de Personal',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->cell(50, 10, 'Nombre', 1,0, 'C',0);
    $this->cell(50, 10, 'Apellido', 1,0, 'C',0);
    $this->cell(40, 10, 'Dni', 1,0, 'C',0);
    $this->cell(30, 10, 'Categoria', 1,1, 'C',0);

}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Pagina ').$this->PageNo().'/{nb}',0,0,'C');
}
}

require_once '../conexion.php';
$consulta = "SELECT * FROM persona";
$resultado = $mysqli ->query($consulta);

$pdf = new PDF();
$pdf -> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',14);

while($row = $resultado->fetch_assoc()){
    $mysqli = new mysqli("localhost", "root", "", "muni23");
    $pdf->cell(50, 10, $row['nombre1'], 1,0, 'C',0);
    $pdf->cell(50, 10, $row['nombre2'], 1,0, 'C',0);
    $pdf->cell(50, 10, $row['apellido1'], 1,0, 'C',0);
    $pdf->cell(50, 10, $row['apellido2'], 1,0, 'C',0);
    $pdf->cell(40, 10, $row['dni'], 1,0, 'C',0);
    $pdf->cell(30, 10, $row['categoria'], 1,1, 'C',0);
  $pdf->cell(40, 10, $row['dni'], 1,0, 'C',0);
    $pdf->cell(30, 10, $row['categoria'], 1,1, 'C',0);
    }

$pdf->Output();
?>