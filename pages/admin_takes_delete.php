<?php
SESSION_START();
if(!$_SESSION['khjshdagsj']){
	SESSION_DESTROY();
	header("location:index.php?msg=UnSuccessfully");
}
include "../resources/connection.php";
if(isset($_POST['id']))
{
	mysqli_query($con,"DELETE FROM `takes` WHERE `take_id`='".$_POST['id']."'") or die(mysqli_error($con));
}
?>
