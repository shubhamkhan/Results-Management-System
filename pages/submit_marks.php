<?php
SESSION_START();
if(!$_SESSION['jhdhgyebha']){
  SESSION_DESTROY();
  header("location:index.php?msg=UnSuccessfully");
}
include "../resources/connection.php";
if(isset($_POST['id'])){
  $total = $_POST['theory']+$_POST['practical'];
  if($total < 40){
    $pass_fail = 'XP';
  }else{
    $pass_fail = 'P';
  }
  mysqli_query($con, "INSERT INTO `marks`(`take_id`, `theory_marks`, `practical_marks`, `total_marks`, `pass_fail`) VALUES ('".$_POST['id']."','".$_POST['theory']."','".$_POST['practical']."','".$total."','".$pass_fail."')");
  mysqli_query($con, "UPDATE `takes` SET `status`='0' WHERE `take_id` = '".$_POST['id']."'");
  echo 1;
}
?>
