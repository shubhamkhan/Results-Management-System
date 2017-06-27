<?php
if(!$_SESSION['khjshdagsj']){
	SESSION_DESTROY();
	header("location:index.php?msg=UnSuccessfully");
}
include "../resources/connection.php";
if(isset($_POST['id'])){
	mysqli_query($con,"UPDATE `student` SET '".$_POST['field']."' = '".$_POST['value']."' WHERE `user_id` = '".$_POST['id']."'");
	echo 1;
}
?>
