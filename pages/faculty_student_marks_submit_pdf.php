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
	$this->Image('../build/images/logo.png',10,90,189);
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
  $this->Cell(180,5,'Marks of Students',0,0,'C');
	$this->Ln(10);
  }
  function Footer()
  {
      $this->SetY(-15);
      $this->SetFont('Arial','I',8);
      //$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
  }
}
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont("Times","",11);
$pdf->Cell(55,10,"Name",1,0,'C');
$pdf->Cell(55,10,"Roll No.",1,0,'C');
$pdf->Cell(40,10,"Theory Marks",1,0,'C');
$pdf->Cell(40,10,"Practical Marks",1,1,'C');
if(isset($_GET['id'])){
  $result=mysqli_query($con,"SELECT `takes`.`roll_no`, `student`.`name` FROM `takes` JOIN `student` ON `takes`.`roll_no` = `student`.`roll_no` WHERE `takes`.`sub_code` = '".$_GET['id']."'");
  while($stu=mysqli_fetch_array($result,MYSQLI_ASSOC))
  {
    $pdf->Cell(55,10,$stu['name'],1,0,'C');
    $pdf->Cell(55,10,$stu['roll_no'],1,0,'C');
    $pdf->Cell(40,10,"",1,0,'C');
    $pdf->Cell(40,10,"",1,1,'C');
  }
}
$pdf->output();
?>
