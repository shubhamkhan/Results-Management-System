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
      $this->Cell(50,10,'STUDENT DETAILS',1,0,'C');
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
$pdf->SetFont("Times","I",18);
if(isset($_GET['id']))
{
  $res=mysqli_query($con,"SELECT `student`.`reg_no`, `student`.`roll_no`, `student`.`user_id`, `student`.`name`, `student`.`address`, `student`.`phone_no`, `student`.`date_of_birth`, `student`.`sem`, `student`.`department`, `student`.`reg_date`, `student`.`last_log_in`, `users`.`email_id` FROM `student` JOIN `users` ON `student`.`user_id` = `users`.`user_id` WHERE `users`.`user_type`= 'Student' AND `student`.`user_id` = '".$_GET['id']."'");
  $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
    $pdf->Cell(95,10,"Name",1,0,'C');
    $pdf->Cell(95,10,$row['name'],1,1,'C');
    $pdf->Cell(95,10,"Roll No.",1,0,'C');
    $pdf->Cell(95,10,$row['roll_no'],1,1,'C');
    $pdf->Cell(95,10,"Registration No.",1,0,'C');
    $pdf->Cell(95,10,$row['reg_no'],1,1,'C');
    $pdf->Cell(95,10,"Address",1,0,'C');
    $pdf->Cell(95,10,$row['address'],1,1,'C');
    $pdf->Cell(95,10,"Phone No.",1,0,'C');
    $pdf->Cell(95,10,$row['phone_no'],1,1,'C');
    $pdf->Cell(95,10,"Email ID",1,0,'C');
    $pdf->Cell(95,10,$row['email_id'],1,1,'C');
    $pdf->Cell(95,10,"Date Of Birth",1,0,'C');
    $pdf->Cell(95,10,$row['date_of_birth'],1,1,'C');
    $pdf->Cell(95,10,"Department",1,0,'C');
    $pdf->Cell(95,10,$row['department'],1,1,'C');
    $pdf->Cell(95,10,"Semester",1,0,'C');
    $pdf->Cell(95,10,$row['sem'],1,1,'C');
    $pdf->Cell(95,10,"Registration Date",1,0,'C');
    $pdf->Cell(95,10,$row['reg_date'],1,1,'C');
    $pdf->Cell(95,10,"Last Login",1,0,'C');
    $pdf->Cell(95,10,$row['last_log_in'],1,1,'C');
}
$pdf->output();
?>
