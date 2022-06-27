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
    $this->Cell(30,10,'Monthly Sales Report',0,0,'C');
    $this->Ln();
}

}

// Instanciation of inherited class
$pdf = new PDF('P','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFont('Times','',20);
	$pdf->Cell(40,10,'Total Booked:',0,0,'C');
	$pdf->Ln();
$pdf->SetFont('Times','B',15);
	$pdf->Cell(90,10,'Activity',1,0,'C');
	$pdf->Cell(90,10,'Amount',1,0,'C');

$result = mysqli_query($con, "SELECT *,COUNT(I_activity) from invoice t1 inner join booking t2 on t1.C_BookingID=t2.C_BookingID WHERE DATE_FORMAT(C_Date, '%Y-%m') = DATE_FORMAT(NOW(), '%Y-%m') AND I_activity = ' Badminton'");
while ($row = mysqli_fetch_array($result))
{
	$pdf->SetFont('Times','',12);
	$pdf->Ln();
	$pdf->Cell(90,10,'Badminton',1,0,'C');
	$pdf->Cell(90,10,$row["COUNT(I_activity)"],1,0,'C');

}

$result1 = mysqli_query($con, "SELECT *,COUNT(I_activity) from invoice t1 inner join booking t2 on t1.C_BookingID=t2.C_BookingID WHERE DATE_FORMAT(C_Date, '%Y-%m') = DATE_FORMAT(NOW(), '%Y-%m') AND I_activity = ' Table Tennis'");
while ($row = mysqli_fetch_array($result1))
{
	$pdf->SetFont('Times','',12);
	$pdf->Ln();
	$pdf->Cell(90,10,'Table Tennis',1,0,'C');
	$pdf->Cell(90,10,$row["COUNT(I_activity)"],1,0,'C');

}

$result2= mysqli_query($con, "SELECT *,COUNT(I_activity) from invoice t1 inner join booking t2 on t1.C_BookingID=t2.C_BookingID WHERE DATE_FORMAT(C_Date, '%Y-%m') = DATE_FORMAT(NOW(), '%Y-%m') AND I_activity = ' Snooker'");
while ($row = mysqli_fetch_array($result2))
{
	$pdf->SetFont('Times','',12);
	$pdf->Ln();
	$pdf->Cell(90,10,'Snooker',1,0,'C');
	$pdf->Cell(90,10,$row["COUNT(I_activity)"],1,0,'C');

}

$result3= mysqli_query($con, "SELECT *,COUNT(I_activity) from invoice t1 inner join booking t2 on t1.C_BookingID=t2.C_BookingID WHERE DATE_FORMAT(C_Date, '%Y-%m') = DATE_FORMAT(NOW(), '%Y-%m') AND I_activity = ' Squash'");
while ($row = mysqli_fetch_array($result3))
{
	$pdf->SetFont('Times','',12);
	$pdf->Ln();
	$pdf->Cell(90,10,'Squash',1,0,'C');
	$pdf->Cell(90,10,$row["COUNT(I_activity)"],1,0,'C');

}
$pdf->Ln();
$pdf->SetFont('Times','',20);
	$pdf->Cell(57,10,'Booking Condition:',0,0,'C');
	$pdf->Ln();
$pdf->SetFont('Times','B',15);
	$pdf->Cell(90,10,'Booking Status',1,0,'C');
	$pdf->Cell(90,10,'Amount',1,0,'C');

$result3= mysqli_query($con, "SELECT *,COUNT(I_activity) from invoice t1 inner join booking t2 on t1.C_BookingID=t2.C_BookingID WHERE DATE_FORMAT(C_Date, '%Y-%m') = DATE_FORMAT(NOW(), '%Y-%m') AND C_BookingStatus = 'Done'");
while ($row = mysqli_fetch_array($result3))
{
	$pdf->SetFont('Times','',12);
	$pdf->Ln();
	$pdf->Cell(90,10,'Done',1,0,'C');
	$pdf->Cell(90,10,$row["COUNT(I_activity)"],1,0,'C');

}

$result3= mysqli_query($con, "SELECT *,COUNT(I_activity) from invoice t1 inner join booking t2 on t1.C_BookingID=t2.C_BookingID WHERE DATE_FORMAT(C_Date, '%Y-%m') = DATE_FORMAT(NOW(), '%Y-%m') AND C_BookingStatus = 'Cancel'");
while ($row = mysqli_fetch_array($result3))
{
	$pdf->SetFont('Times','',12);
	$pdf->Ln();
	$pdf->Cell(90,10,'Cancel',1,0,'C');
	$pdf->Cell(90,10,$row["COUNT(I_activity)"],1,0,'C');

}

$result3= mysqli_query($con, "SELECT *,COUNT(I_activity) from invoice t1 inner join booking t2 on t1.C_BookingID=t2.C_BookingID WHERE DATE_FORMAT(C_Date, '%Y-%m') = DATE_FORMAT(NOW(), '%Y-%m') AND C_BookingStatus = 'pending'");
while ($row = mysqli_fetch_array($result3))
{
	$pdf->SetFont('Times','',12);
	$pdf->Ln();
	$pdf->Cell(90,10,'Pending',1,0,'C');
	$pdf->Cell(90,10,$row["COUNT(I_activity)"],1,0,'C');

}

$pdf->Output();
header("Content-type: application/pdf");
header("Content-disposition: attachment; filename = Monthly Sales Report.pdf ");


?>