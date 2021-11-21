<?php

require 'fpdf.php';

class PDF extends FPDF
{
// Cabecera de página
function Header(){   

    $this->Image('images/logo.png', 95, 22, 25);
    $this->SetFont("Arial", "B", 20);
    $this->Cell(0,50, "Instituto San ignacio de Loyola", 0, 1, "C");
    $this->Ln(8);
    // Arial bold 35
    $this->SetFont('Arial','B',35);
    // Movernos a la derecha
    $this->Cell(90);
    // Título
    $this->Cell(65,10,utf8_decode('Reporte de observación'),0,2,'C');
    
    // Salto de línea
    $this->Ln(8);

}
    
    // Pie de página
    function Footer(){
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

?>