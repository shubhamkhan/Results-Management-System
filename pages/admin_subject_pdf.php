<?php
SESSION_START();
if(!$_SESSION['khjshdagsj']){
  SESSION_DESTROY();
  header("location:index.php?msg=UnSuccessfully");
}
include "../resources/connection.php";
require("../vendors/fpdf/fpdf.php");
class PDF extends FPDF
{
  function Header()
  {
      // Logo
      $this->Image('../build/images/logo.png',10,6,20);
      $this->Image('../build/images/logo.png',180,6,20);
      // Arial bold 15
      $this->SetFont('Arial','B',15);
      // Move to the right
      $this->Cell(80);
      // Title
      $this->Cell(40,10,'SUBJECT LIST',1,0,'C');
      // Line break
      $this->Ln(20);
  }
  function Footer()
  {
      // Position at 1.5 cm from bottom
      $this->SetY(-15);
      // Arial italic 8
      $this->SetFont('Arial','I',8);
      // Page number
      $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
  }
}
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont("Times","",11);
$pdf->Cell(20,10,"CODE",1,0,'C');
$pdf->Cell(65,10,"SUBJECT NAME",1,0,'C');
$pdf->Cell(25,10,"THEORY MARKS",1,0,'C');
$pdf->Cell(25,10,"PARTICAL MARKS",1,0,'C');
$pdf->Cell(22,10,"TOTAL MARKS",1,0,'C');
$pdf->Cell(13,10,"SEM",1,0,'C');
$pdf->Cell(20,10,"DEPARTMENT",1,1,'C');
$pdf->SetFont("Times","B",9);
$res=mysqli_query($con,"SELECT `sub_code`, `th_marks`, `pr_marks`, `total_marks`, `sub_name`, `sem`, `department` FROM `subject` ORDER BY `department`, `sem` ASC");
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
  $pdf->Cell(20,10,$row['sub_code'],1,0,'C');
  $pdf->Cell(65,10,$row['sub_name'],1,0,'C');
  $pdf->Cell(25,10,$row['th_marks'],1,0,'C');
  $pdf->Cell(25,10,$row['pr_marks'],1,0,'C');
  $pdf->Cell(22,10,$row['total_marks'],1,0,'C');
  $pdf->Cell(13,10,$row['sem'],1,0,'C');
  $pdf->Cell(20,10,$row['department'],1,1,'C');
}
$pdf->output();
?>
