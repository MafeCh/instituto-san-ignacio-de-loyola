<?php

require 'plantilla.php';
require '../Model/cn.php';

$reporte = $_POST['reporte'];

$sql = "SELECT o.fecharegistro, o.tipofalta, o.descripcion, o.descargos, o.idestudiante, e.idestudiante, e.nombreUsuario
        FROM observacion AS o 
        INNER JOIN estudiante AS e
        ON o.idestudiante=e.idestudiante WHERE o.idestudiante LIKE '$reporte'";
$resultado = $mysqli->query($sql);


$pdf = new PDF("L");
$pdf->AddPage();
$pdf->AliasNbPages();
$pdf->SetMargins(7,10);


$pdf->SetFont('Arial','B',18);
$pdf->Cell(-3);

$pdf->Cell(28, 15, "Fecha", 1, 0, "C");
$pdf->Cell(25, 15, "Falta", 1, 0, "C");
$pdf->Cell(105, 15, utf8_decode("Descripción"), 1, 0, "C");
$pdf->Cell(128, 15, "Descargos", 1, 0, "C");
$pdf->Cell(20, 15, "Id", 1, 0, "C");
$pdf->Cell(38, 15, "Nombre", 1, 1, "C");

$pdf->SetFont('Arial','',13);


while($row = $resultado->fetch_assoc()){
    $pdf->Cell(28, 15, $row['fecharegistro'], 1, 0, "C");
    $pdf->Cell(25, 15,utf8_decode($row['tipofalta']), 1, 0, "C");
    $pdf->Cell(105,15,utf8_decode($row['descripcion']) , 1, 0, "");
    $pdf->Cell(128,15,utf8_decode($row['descargos']), 1, 0, "");
    $pdf->Cell(20,15,utf8_decode($row['idestudiante']), 1, 0, "");
    $pdf->Cell(38,15,$row['nombreUsuario'], 1, 1, "C"); 
}

$pdf->Output();
?>