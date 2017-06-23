<?php
include "../resources/connection.php";
if(isset($_POST['id']))
{
	mysqli_query($con,"DELETE FROM `teaches` WHERE `fac_id`='".$_POST['id']."'") or die(mysqli_error($con));
}
?>
