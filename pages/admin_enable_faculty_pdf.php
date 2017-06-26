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
      $this->Cell(40,10,'FACULTY LIST',1,0,'C');
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
$pdf->Cell(35,10,"NAME",1,0,'C');
$pdf->Cell(70,10,"ADDRESS",1,0,'C');
$pdf->Cell(45,10,"EMAIL ID",1,0,'C');
$pdf->Cell(20,10,"PHONE NO.",1,0,'C');
$pdf->Cell(20,10,"DEPARTMENT",1,1,'C');
$pdf->SetFont("Times","B",9);
$res=mysqli_query($con,"SELECT `faculty`.`name`, `faculty`.`address`, `faculty`.`phone_no`, `faculty`.`department`, `users`.`email_id` FROM `faculty` JOIN `users` ON `faculty`.`user_id` = `users`.`user_id` WHERE `users`.`user_type`= 'Faculty' and `users`.`user_status`='0' ORDER BY `department` ASC");
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
  $pdf->Cell(35,10,$row['name'],1,0,'C');
  $pdf->Cell(70,10,$row['address'],1,0,'C');
  $pdf->Cell(45,10,$row['email_id'],1,0,'C');
  $pdf->Cell(20,10,$row['phone_no'],1,0,'C');
  $pdf->Cell(20,10,$row['department'],1,1,'C');
}
$pdf->output();
?>
