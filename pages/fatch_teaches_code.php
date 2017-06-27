<?php
SESSION_START();
if(!$_SESSION['khjshdagsj']){
  SESSION_DESTROY();
  header("location:index.php?msg=UnSuccessfully");
}
include "../resources/connection.php";
  if(isset($_POST["action"]))
  {
   $output = '';
   if($_POST["action"] == "sem")
   {
     if($_POST["query"])
     {
       $result = mysqli_query($con, "SELECT `sub_code`, `sub_name` FROM `subject` WHERE `sem` = '".$_POST["query"]."' AND `department` = '".$_POST["queryone"]."' ORDER BY `sub_code`");
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
