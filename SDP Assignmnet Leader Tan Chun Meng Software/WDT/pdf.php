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
}


}

// Instanciation of inherited class
$pdf = new PDF('L','mm','A5');
$pdf->AliasNbPages();
$pdf->AddPage();

$id = intval($_GET["id"]);
$result = mysqli_query($con, "SELECT * FROM invoice WHERE I_id=$id");
while ($row = mysqli_fetch_array($result))
{
	$pdf->SetFont('Times','B',12);
	$pdf->Cell(25,10,'Invoice ID :',0,0,'c');
	$pdf->Cell(120,10, $row['I_id'],0,0,'c');
	$pdf->Cell(15,10, 'Date :',0,0,'c');
	$pdf->Cell(99,10, $row['I_CurrentDate'],0,0,'c');
	$pdf->Ln();
	$pdf->Cell(35,10,'Customer Name :',0,0,'c');
	$pdf->Cell(110,10, $row['I_name'],0,0,'c');
	$pdf->Cell(15,10, 'Time :',0,0,'c');
	$pdf->Cell(99,10, $row['I_CurrentTime'],0,0,'c');
	$pdf->Ln();
	$pdf->Cell(47,10,'Activity Name',1,0,'C');
	$pdf->Cell(47,10,'Booking Date',1,0,'C');
	$pdf->Cell(47,10,'Time',1,0,'C');
	$pdf->Cell(47,10,'RM',1,0,'C');
	$pdf->Ln();
	$pdf->Cell(47,10,$row['I_activity'],1,0,'C');
	$pdf->Cell(47,10,$row['I_date'],1,0,'C');
	$pdf->Cell(47,10,$row['I_time'],1,0,'C');
	$pdf->Cell(47,10,$row['I_fee'],1,0,'C');
	$pdf->Ln(15);
	$pdf->SetFont('Times','B',10);
	$pdf->SetTextColor(255,0,0);
	$pdf->Cell(20,10,'* Please Pay Within 3 minutes To The Bank Account Below or Booking will be deleted',0,0,'c');
	$pdf->Ln(7);
	$pdf->SetTextColor(0,0, 0);
	$pdf->SetFont('Times','B',10);
	$pdf->Cell(20,10,'BANK Name : Public Bank',0,0,'c');
	$pdf->Ln(5);
	$pdf->Cell(20,10,'BANK Account : 4587 1463 8496 1435 ',0,0,'c');
	$pdf->Ln(5);
	$pdf->Cell(20,10,'Account Name: Mr Smash SDN BHD',0,0,'c');
}

$pdf->Output("F","Mr Smash Invoice.pdf");
header("Content-type: application/pdf");
header("Content-disposition: attachment; filename = Mr Smash Invoice.pdf ");
readfile("Mr Smash Invoice.pdf");


?>