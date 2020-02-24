<?php
ob_start();
require('fpdf/fpdf.php');
mysqli_connect("localhost","root","","phpdasar");


$pdf = new FPDF('P','mm','A4');

$pdf->addPage();

$pdf->setFont('arial','B',16);
$pdf->Cell(160,5,'Invoice Warung',1,1);


$pdf->Output();

?>