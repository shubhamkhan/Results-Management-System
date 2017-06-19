<?php
include "../resources/connection.php";
if(isset($_GET['id']))
{
	mysqli_query($con,"DELETE FROM `subject` WHERE `sub_code`='".$_GET['id']."'") or die(mysqli_error($con));
	header("Location:admin_subject_table_view.php?msg=Succesfully delete from database");
}
?>
