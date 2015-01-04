<?php

require("fpdf/fpdf.php");





$connection = mysql_connect("localhost","root", "");

$db = "hr_mgt";

mysql_select_db($db, $connection)

        or die( "Could not open $db database");





$sql = 'SELECT * FROM tbl_emp ';

$result = mysql_query($sql, $connection)

        or die( "Could not execute sql: $sql");

$t=mysql_fetch_array($result);

// build the data array from the database records.



$pdf = new FPDF( );

$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10,'Employee database',1,0,'C');
$pdf->Ln();
$pdf->Cell(0,10,'Employee id:');
$pdf->SetX(50);//space horizontal
$pdf->write(10,$t['emp_id']);//write here 
$pdf->Ln();//line breaak

$pdf->Cell(0,10,'Employee name:');
$pdf->SetX(70);
$pdf->write(10,$t['emp_name']);

$pdf->Output();


?>