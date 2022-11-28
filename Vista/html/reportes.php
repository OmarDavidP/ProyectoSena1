<?php
include('../../Modelo/config.php');
require "../../Modelo/fpdf/plantilla.php";

$pdf = new FPDF();
///var_dump(get_class_methods($pdf));


$query="SELECT aprendiz.nombre, aprendiz.id_aprendiz,aprendiz.documento, telefono, correo, direccion, estado, ambiente_aprendizaje.nombre_ambiente, fichas.numero_ficha, matricula_aprendiz_ambiente.fecha_registro,id_matricula, matricula_aprendiz_ambiente.fecha_inicio, matricula_aprendiz_ambiente.fecha_fin FROM fichas INNER JOIN (aprendiz INNER JOIN (matricula_aprendiz_ambiente INNER JOIN ambiente_aprendizaje ON matricula_aprendiz_ambiente.id_ambiente=ambiente_aprendizaje.id_ambiente)ON aprendiz.id_aprendiz=matricula_aprendiz_ambiente.id_aprendiz) ON fichas.id_fichas=aprendiz.id_fichas";
$result = mysqli_query($mysqli, $query);
$no=0;


$pdf = new PDF("l", "mm", "legal");
    $pdf->AliasNbPages();
    $pdf->SetMargins(10, 10, 10);
    $pdf->AddPage();
	
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(50,10,'Servicion Nacional de Aprendizaje',80,10,"C");
	$pdf->Ln(15);
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(0,10,'Pasantes registrados',1,1,"C");
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(6,8,'N',1);
	$pdf->Cell(55,8,'Nombre',1);
	$pdf->Cell(30,8,'Documento',1);
	$pdf->Cell(35,8,'Area',1);
	$pdf->Cell(50,8,'Correo',1);
	$pdf->Cell(30,8,'Inicio',1);
	$pdf->Cell(40,8,'Fin pasantia',1);
	$pdf->Cell(30,8,'Ficha',1);
	$pdf->Cell(40,8,'Celular',1);
	$pdf->Cell(19,8,'Estado',1);
	


while($row = mysqli_fetch_array($result)){
	$no=$no+1;
	$pdf->Ln(8);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(6,8,$no,1);
	$pdf->Cell(55,8,$row['nombre'],1);
	$pdf->Cell(30,8,$row['documento'],1);
	$pdf->Cell(35,8,$row['nombre_ambiente'],1);
	$pdf->Cell(50,8,$row['correo'],1);
	$pdf->Cell(30,8,$row['fecha_inicio'],1);
	$pdf->Cell(40,8,$row['fecha_fin'],1);
	$pdf->Cell(30,8,$row['numero_ficha'],1);
	$pdf->Cell(40,8,$row['telefono'],1);
	$pdf->Cell(19,8,$row['estado'],1);
}
$pdf->Output();
?>
