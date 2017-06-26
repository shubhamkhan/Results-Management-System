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
      $this->Cell(40,10,'TEACHES LIST',1,0,'C');
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
$pdf->Cell(70,10,"NAME",1,0,'C');
$pdf->Cell(50,10,"DEPARTMENT",1,0,'C');
$pdf->Cell(40,10,"SUBJECT CODE",1,0,'C');
$pdf->Cell(30,10,"YEAR",1,1,'C');
$pdf->SetFont("Times","B",9);
$res=mysqli_query($con,"SELECT `fac_id`, `sub_code`, `year` FROM `teaches` ORDER BY `year` ASC");
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
  $result = mysqli_query($con,"SELECT `name`, `department` FROM `faculty` WHERE `fac_id` = '".$row['fac_id']."' ORDER BY `department` ASC");
  $fac_name = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $pdf->Cell(70,10,$fac_name['name'],1,0,'C');
  $pdf->Cell(50,10,$fac_name['department'],1,0,'C');
  $pdf->Cell(40,10,$row['sub_code'],1,0,'C');
  $pdf->Cell(30,10,$row['year'],1,1,'C');
}
$pdf->output();
?>
