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
	$this->SetFont('Arial','B',13,'C');
	$this->SetTextColor(0,0,0);
  $this->Cell(180,5,'Students Marks',0,0,'C');
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
$pdf->SetFont("Times","B",11);
$pdf->Cell(55,10,"Name",1,0,'C');
$pdf->Cell(55,10,"Roll No.",1,0,'C');
$pdf->Cell(40,10,"Theory Marks",1,0,'C');
$pdf->Cell(40,10,"Practical Marks",1,0,'C');
$pdf->Ln(10);
if(isset($_GET['id'])){
 $result=mysqli_query($con,"SELECT `marks`.`theory_marks`, `marks`.`practical_marks`, `student`.`name`, `student`.`roll_no`, `takes`.`take_id`, `takes`.`take_id`, `takes`.`roll_no`, `subject`.`sub_code` FROM `student` JOIN `takes` ON `student`.`roll_no`=`takes`.`roll_no` JOIN `subject` ON `subject`.`sub_code`=`takes`.`sub_code` JOIN `marks` ON `takes`.`take_id`=`marks`.`take_id` WHERE `takes`.`sub_code` = '".$_GET['id']."'");
  while($stu=mysqli_fetch_array($result,MYSQLI_ASSOC))
  {
	$pdf->SetFont("Times","",11);
    $pdf->Cell(55,10,$stu['name'],1,0,'C');
    $pdf->Cell(55,10,$stu['roll_no'],1,0,'C');
    $pdf->Cell(40,10,$stu['theory_marks'],1,0,'C');
    $pdf->Cell(40,10,$stu['practical_marks'],1,0,'C');
	$pdf->Ln(10);
  }
}

$pdf->output();
?>
