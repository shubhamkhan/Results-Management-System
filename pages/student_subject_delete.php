<?php
SESSION_START();
if(!$_SESSION['ayukgcystf']){
	SESSION_DESTROY();
	header("location:index.php?msg=UnSuccessfully");
}
include "../resources/connection.php";
if(isset($_POST['id']))
{
	mysqli_query($con,"DELETE FROM `takes` WHERE `sub_code`='".$_POST['id']."'") or die(mysqli_error($con));
}
?>
