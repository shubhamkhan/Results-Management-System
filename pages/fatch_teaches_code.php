<?php
include "../resources/connection.php";
  if(isset($_POST["action"]))
  {
   $output = '';
   if($_POST["action"] == "year")
   {
     if($_POST["query"] == '1')
     {
       $result = mysqli_query($con, "SELECT `sub_code`, `sub_name` FROM `subject` WHERE `sem` = '1' OR `sem` = '2' ORDER BY `sub_code`");
     }
     if($_POST["query"] == '2')
     {
       $result = mysqli_query($con, "SELECT `sub_code`, `sub_name` FROM `subject` WHERE `sem` = '3' OR `sem` = '4' ORDER BY `sub_code`");
     }
     if($_POST["query"] == '3')
     {
       $result = mysqli_query($con, "SELECT `sub_code`, `sub_name` FROM `subject` WHERE `sem` = '5' OR `sem` = '6' ORDER BY `sub_code`");
     }
     if($_POST["query"] == '4')
     {
       $result = mysqli_query($con, "SELECT `sub_code`, `sub_name` FROM `subject` WHERE `sem` = '7' OR `sem` = '8' ORDER BY `sub_code`");
     }
      $output .= '<option value="">Select Subject Code</option>';
      while($row = mysqli_fetch_array($result))
      {
       $output .= '<option value="'.$row["sub_code"].'">'.$row["sub_code"].'('.$row["sub_name"].')</option>';
      }
   }
   if($_POST["action"] == "subj_code")
   {
    $result = mysqli_query($con, "SELECT `fac_id`, `name` FROM `faculty`");
    $output .= '<option value="">Select Faculty Name</option>';
    while($row = mysqli_fetch_array($result))
    {
     $output .= '<option value="'.$row["fac_id"].'">'.$row["name"].'</option>';
    }
   }
   echo $output;
  }
 ?>
