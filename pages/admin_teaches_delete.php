<?php
include "../resources/connection.php";
if(isset($_GET['id']))
{
	mysqli_query($con,"DELETE FROM `teaches` WHERE `fac_id`='".$_GET['id']."'") or die(mysqli_error($con));
	header("Location:admin_teaches_table_view.php?msg=Succesfully delete from database");
}
?>
