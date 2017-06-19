<?php
include "../resources/connection.php";
if(isset($_GET['id'])){
  mysqli_query($con, "UPDATE `users` SET `user_status` = '1' WHERE `user_id` ='".$_GET['id']."'");
  header("location:admin_enable_faculty_table_view.php?msg=Successfully");
}else{
  header("location:admin_enable_faculty_table_view.php?msg=UnSuccessfully");
}
?>
