<?php
include "../resources/connection.php";
if(isset($_GET['id'])){
  mysqli_query($con, "UPDATE `users` SET `user_status` = '0' WHERE `user_id` ='".$_GET['id']."'");
  header("Location:admin_disabled_faculty_table_view.php?msg=Successfull");
}else{
  header("location:admin_disabled_faculty_table_view.php?msg=UnSuccessfully");
}
?>
