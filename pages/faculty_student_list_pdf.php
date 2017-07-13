<?php
SESSION_START();
if(!$_SESSION['jhdhgyebha']){
  SESSION_DESTROY();
  header("location:index.php?msg=UnSuccessfully");
}
include "../resources/connection.php";
require("../vendors/fpdf/fpdf.php");
class PDF extends FPDF
{
  function Header()
  {
	$this->Image('../build/images/logo.png',10,6,20);
  $this->Image('../build/images/logo.png',180,6,20);
	$this->Image('../build/images/jgec.png',10,90,189);
	$this->Ln(10);
  $this->SetFont('Arial','B',13,'C');
	$this->SetTextColor(0,0,220);
  $this->Cell(180,5,'JALPAIGURI GOVERNMENT ENGINEERING COLLEGE',0,0,'C');
  $this->Ln(5);
  $this->Cell(180,5,'A GOVT. AUTONOMOUS ENGG. COLLEGE',0,0,'C');
  $this->Ln(5);
	$this->SetFont('Arial','I',13,'C');
  $this->Cell(180,5,'( AFFILIATED TO MAULANA ABUL KALAM AZAD UNIVERSITY OF TECHNOLOGY )',0,0,'C');
  $this->Ln(20);
	$this->SetFont('Arial','',13,'C');
	$this->SetTextColor(0,0,0);
  $this->Cell(180,5,'Students Details',0,0,'C');
	$this->Ln(10);
  }
  function Footer()
  {
      $this->SetY(-15);
      $this->SetFont('Arial','I',8);
      $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
  }
}
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont("Times","B",11);
$pdf->Cell(85,10,"Name",1,0,'C');
$pdf->Cell(50,10,"Roll No.",1,0,'C');
$pdf->Cell(50,10,"Registration No.",1,0,'C');
$pdf->Ln(10);
if(isset($_GET['id'])){
 $result=mysqli_query($con,"SELECT `subject`.`sub_name`,`subject`.`sub_code`,`student`.`name`,`student`.`roll_no`,`student`.`reg_no`,`student`.`sem` FROM `student` JOIN `subject` ON `student`.`sem`=`subject`.`sem` WHERE `subject`.`sub_code` = '".$_GET['id']."'");
  while($stu=mysqli_fetch_array($result,MYSQLI_ASSOC))
  {
	$pdf->SetFont("Times","",11);
    $pdf->Cell(85,10,$stu['name'],1,0,'C');
    $pdf->Cell(50,10,$stu['roll_no'],1,0,'C');
    $pdf->Cell(50,10,$stu['reg_no'],1,0,'C');
	$pdf->Ln(10);
  }
}

$pdf->output();
?>
