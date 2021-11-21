<?php

require 'plantilla.php';
require '../../Model/cn.php';

$calificacion = $_POST['calificacion'];

$sql= "SELECT * FROM calificaciones WHERE Estudiante_idEstudiante LIKE '$calificacion' ";

$resultado = $mysqli->query($sql);

$pdf = new PDF("L");
$pdf->AddPage();
$pdf->AliasNbPages();
$pdf->SetMargins(7,10);


$pdf->SetFont('Arial','B',18);
$pdf->Cell(-3);

$pdf->Cell(65, 15, "Nota Tarea 1", 1, 0, "C");
$pdf->Cell(65, 15, "Nota Trabajo 1", 1, 0, "C");
$pdf->Cell(65, 15, utf8_decode("Nota Examen 1"), 1, 0, "C");
$pdf->Cell(98, 15, "Fecha Registro", 1, 0, "C");
$pdf->Cell(38, 15, "Id Profesor", 1, 1, "C");

$pdf->SetFont('Arial','',13);

while($row = $resultado->fetch_assoc()){
    $pdf->Cell(65, 15, $row['notatarea1'], 1, 0, "C");
    $pdf->Cell(65, 15,utf8_decode($row['notatrabajo1']), 1, 0, "C");
    $pdf->Cell(65,15,utf8_decode($row['notaexamen1']) , 1, 0, "");
    $pdf->Cell(98,15,utf8_decode($row['fecharegistro']), 1, 0, "");
    $pdf->Cell(38,15,$row['Profesor_idProfesor'], 1, 1, "C"); 
}

$pdf->Output();
?>