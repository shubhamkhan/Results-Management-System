<?php
include "../resources/connection.php";
if(isset($_POST['id']))
{
	mysqli_query($con,"DELETE FROM `subject` WHERE `sub_code`='".$_POST['id']."'") or die(mysqli_error($con));
}
?>
