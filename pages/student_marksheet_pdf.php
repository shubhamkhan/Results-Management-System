<?php
SESSION_START();
if(!$_SESSION['ayukgcystf']){
  SESSION_DESTROY();
  header("location:index.php?msg=UnSuccessfully");
}
include "../resources/connection.php";
require("../vendors/fpdf/fpdf.php");
class PDF extends FPDF
{
  function Header()
  {
    $this->SetFont('Arial','B',13,'C');
    $this->SetTextColor(0,0,220);
    $this->Cell(180,5,'JALPAIGURI GOVERNMENT ENGINEERING COLLEGE',0,0,'C');
    $this->Ln(5);
    $this->Cell(180,5,'A GOVT. AUTONOMOUS ENGG. COLLEGE',0,0,'C');
    $this->Ln(5);
    $this->Cell(190,5,'( AFFILIATED TO MAULANA ABUL KALAM AZAD UNIVERSITY OF TECHNOLOGY )',0,0,'C');
    $this->Ln(50);
    $this->Image('../build/images/logo.png',80,25,40);
    $this->Cell(180,1,'GRADE CARD',0,0,'C');
    $this->Ln(10);
  }
}
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFont("Times","",11);

  $res=mysqli_query($con,"SELECT `reg_no`, `roll_no`, `name`, `sem`, `department`, `reg_date` FROM `student` WHERE `user_id` ='".$_SESSION['id']."'");
  $row=mysqli_fetch_array($res,MYSQLI_ASSOC);

	$pdf->Cell(30,10,"For the:",0,0,'L');
  $sem = '';
  $year = '';
  $nextyr = $row['reg_date']+1;
  switch ($row['sem']) {
    case 1:
        $sem = 'FIRST SEMESTER';
        $year = 'FIRST YEAR';
        break;
    case 2:
        $sem = 'SECOND SEMESTER';
        $year = 'FIRST YEAR';
        break;
    case 3:
        $sem = 'FIRST SEMESTER';
        $year = 'SECOND YEAR';
        break;
    case 4:
        $sem = 'SECOND SEMESTER';
        $year = 'SECOND YEAR';
        break;
    case 5:
        $sem = 'FIRST SEMESTER';
        $year = 'THIRD YEAR';
        break;
    case 6:
        $sem = 'SECOND SEMESTER';
        $year = 'THIRD YEAR';
        break;
    case 7:
        $sem = 'FIRST SEMESTER';
        $year = 'FOURTH YEAR';
        break;
    case 8:
        $sem = 'SECOND SEMESTER';
        $year = 'FOURTH YEAR';
        break;
    }
	$pdf->Cell(30,10,$year." B.TECH  (".$row['department'].") ".$sem."  EXAMINATION OF  ".$row['reg_date']." - ".$nextyr,0,0,'L');
	$pdf->Ln(5);
	$pdf->Cell(30,10,"of Name:",0,0,'L');
	$pdf->Cell(30,10,$row['name'],0,0,'L');
	$pdf->Ln(5);
	$pdf->Cell(30,10,"Roll No.:",0,0,'L');
	$pdf->Cell(30,10,$row['roll_no'],0,0,'L');
	//$pdf->Ln(5);
	$pdf->Cell(80,10,"Registration No.:",0,0,'R');
	$pdf->Cell(100,10,$row['reg_no'],0,0,'L');
	$pdf->Ln(20);

  $pdf->SetTextColor(0,0,220);
	$pdf->SetFont("Times","B",11);
	$pdf->Cell(25,10,"Subject Code",1,0,'C');
	$pdf->Cell(65,10,"Subject Offered",1,0,'C');
  $pdf->Cell(20,10,"Full Marks",1,0,'C');
	$pdf->Cell(25,10,"Theory Marks",1,0,'C');
	$pdf->Cell(30,10,"Practical Marks",1,0,'C');
	$pdf->Cell(25,10,"Subject Total",1,1,'C');
  $pdf->SetTextColor(0,0,0);

$res1=mysqli_query($con,"SELECT `subject`.`sub_code`, `subject`.`sub_name`,`subject`.`total_marks`,`takes`.`sub_code`,`takes`.`take_id`,`takes`.`roll_no`,`marks`.`take_id`, `marks`.`theory_marks`,`marks`.`practical_marks`,`marks`.`total_marks`, `marks`.`pass_fail` FROM `takes` JOIN `marks` ON `marks`.`take_id` =`takes`.`take_id` JOIN `subject` ON `subject`.`sub_code` =`takes`.`sub_code` WHERE `takes`.`roll_no`='".$row['roll_no']."'");
$marks = 0;
$pf = 'P';
while($row1=mysqli_fetch_array($res1,MYSQLI_ASSOC))
{
	$pdf->SetFont("Times","",11);
	$pdf->Cell(25,10,$row1['sub_code'],1,0,'C');
	$pdf->Cell(65,10,$row1['sub_name'],1,0,'L');
  $pdf->Cell(20,10,'100',1,0,'C');
	$pdf->Cell(25,10,$row1['theory_marks'],1,0,'C');
	$pdf->Cell(30,10,$row1['practical_marks'],1,0,'C');
	$pdf->Cell(25,10,$row1['total_marks'],1,1,'C');
  if($row1['pass_fail'] != 'P' AND $row1['pass_fail'] == 'XP'){
    $pf = 'XP';
  }
  $marks = $marks + $row1['total_marks'];
}
  $pdf->Cell(25,10,'',1,0,'L');
	$pdf->Cell(65,10,'Total Marks',1,0,'L');
  $pdf->Cell(20,10,'',1,0,'L');
  $pdf->Cell(25,10,'',1,0,'L');
  $pdf->Cell(30,10,'',1,0,'L');
  $pdf->Cell(25,10,$marks,1,0,'C');

  $pdf->Ln(30);
  $pdf->Cell(15,10,'Result:',0,0,'L');
  $pdf->Cell(10,10,$pf,0,0,'L');
  $pdf->Ln(25);
  $pdf->Cell(15,10,date("j F Y"),0,0,'L');
  $pdf->output();

?>
