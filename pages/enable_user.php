<?php
SESSION_START();
if(!$_SESSION['khjshdagsj']){
  SESSION_DESTROY();
  header("location:index.php?msg=UnSuccessfully");
}
include "../resources/connection.php";
if(isset($_POST['id'])){
  mysqli_query($con, "UPDATE `users` SET `user_status` = '0' WHERE `user_id` ='".$_POST['id']."'");
  echo 1;
}
?>
