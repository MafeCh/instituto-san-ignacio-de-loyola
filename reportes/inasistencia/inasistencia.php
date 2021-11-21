<?php

require 'plantilla.php';
require '../../Model/cn.php';

$inasistencia = $_POST['inasistencia'];

$sql= "SELECT * FROM inasistencia WHERE Estudiante_idEstudiante LIKE '$inasistencia' ";

$resultado = $mysqli->query($sql);

$pdf = new PDF("L");
$pdf->AddPage();
$pdf->AliasNbPages();
$pdf->SetMargins(10,10);


$pdf->SetFont('Arial','B',18);
$pdf->Cell(3);

$pdf->Cell(98, 15, "Fecha Inasistencia", 1, 0, "C");
$pdf->Cell(98, 15, "Excusa", 1, 0, "C");
$pdf->Cell(65, 15, utf8_decode("Id Estudiante"), 1, 0, "C");
$pdf->Cell(65, 15, "Id Profesor", 1, 1, "C");

$pdf->SetFont('Arial','',13);

while($row = $resultado->fetch_assoc()){
    $pdf->Cell(3);
    $pdf->Cell(98, 15, $row['fechainasistencia'], 1, 0, "C");
    $pdf->Cell(98, 15,utf8_decode($row['excusainasistencia']), 1, 0, "C");
    $pdf->Cell(65, 15,utf8_decode($row['Estudiante_idEstudiante']) , 1, 0, "C");
    $pdf->Cell(65, 15,$row['Profesor_idProfesor'], 1, 1, "C"); 
}
$pdf->Output();
?>