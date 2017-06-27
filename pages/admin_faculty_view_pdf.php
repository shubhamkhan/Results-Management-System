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
      $this->Cell(50,10,'FACULTY DETAILS',1,0,'C');
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
  $res=mysqli_query($con,"SELECT `faculty`.`name`, `faculty`.`address`, `faculty`.`date_of_birth`, `faculty`.`phone_no`, `faculty`.`qualification`, `faculty`.`experience`, `faculty`.`department`, `faculty`.`join_date`, `faculty`.`last_log_in`, `users`.`email_id` FROM `faculty` JOIN `users` ON `faculty`.`user_id` = `users`.`user_id` WHERE `users`.`user_type`= 'Faculty' AND `faculty`.`user_id` = '".$_GET['id']."'");
  $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
    $pdf->Cell(95,10,"Name",1,0,'C');
    $pdf->Cell(95,10,$row['name'],1,1,'C');
    $pdf->Cell(95,10,"Address",1,0,'C');
    $pdf->Cell(95,10,$row['address'],1,1,'C');
    $pdf->Cell(95,10,"Phone No.",1,0,'C');
    $pdf->Cell(95,10,$row['phone_no'],1,1,'C');
    $pdf->Cell(95,10,"Email ID",1,0,'C');
    $pdf->Cell(95,10,$row['email_id'],1,1,'C');
    $pdf->Cell(95,10,"Date Of Birth",1,0,'C');
    $pdf->Cell(95,10,$row['date_of_birth'],1,1,'C');
    $pdf->Cell(95,10,"Join Date",1,0,'C');
    $pdf->Cell(95,10,$row['join_date'],1,1,'C');
    $pdf->Cell(95,10,"Qualification",1,0,'C');
    $pdf->Cell(95,10,$row['qualification'],1,1,'C');
    $pdf->Cell(95,10,"Experience",1,0,'C');
    $pdf->Cell(95,10,$row['experience'],1,1,'C');
    $pdf->Cell(95,10,"Department",1,0,'C');
    $pdf->Cell(95,10,$row['department'],1,1,'C');
    $pdf->Cell(95,10,"Last Login",1,0,'C');
    $pdf->Cell(95,10,$row['last_log_in'],1,1,'C');
}
$pdf->output();
?>
