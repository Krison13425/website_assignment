<?php
require('fpdf/fpdf.php');
include("conn.php");


class PDF extends FPDF
{
// Page header
function Header()
{
    $this->Image('logo.jpg',10,6,30);
    $this->SetFont('Arial','B',20);
    $this->Cell(80);
    $this->Cell(30,10,'Mr.Smash',0,0,'C');
    $this->Ln();
	$this->SetFont('Times','',10);
	$this->Cell(80);
	$this->Cell(30,0,'Jalan Layang - Layang 1, Bandar Puchong Jaya,',0,0,'C');
	$this->Ln(4);
	$this->Cell(80);
	$this->Cell(30,0,'47170 Puchong, Selangor',0,0,'C');
	$this->Ln(30);
	$this->SetFont('Times','U',20);
	$this->Cell(80);
    $this->Cell(30,10,'Tracking Report',0,0,'C');
    $this->Ln();
}

}

// Instanciation of inherited class
$pdf = new PDF('P','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFont('Times','B',15);
	$pdf->Cell(47,10,'Booking ID',1,0,'C');
	$pdf->Cell(47,10,'Activity',1,0,'C');
	$pdf->Cell(47,10,'Date',1,0,'C');
	$pdf->Cell(47,10,'Time',1,0,'C');

$result = mysqli_query($con, "SELECT * from invoice t1 inner join booking t2 on t1.C_BookingID=t2.C_BookingID WHERE DATE_FORMAT(C_Date, '%Y-%m') = DATE_FORMAT(NOW(), '%Y-%m')");
while ($row = mysqli_fetch_array($result))
{
	$pdf->SetFont('Times','',12);
	$pdf->Ln();
	$pdf->Cell(47,10,$row["C_BookingID"],1,0,'C');
	$pdf->Cell(47,10,$row["I_activity"],1,0,'C');
	$pdf->Cell(47,10,$row["C_CurrentDate"],1,0,'C');
	$pdf->Cell(47,10,$row["C_CurrentTime"],1,0,'C');
}

$pdf->Output();
header("Content-type: application/pdf");
header("Content-disposition: attachment; filename = report.pdf ");


?>