<?php
SESSION_START();
if(!$_SESSION['khjshdagsj']){
	SESSION_DESTROY();
	header("location:index.php?msg=UnSuccessfully");
}
include "../resources/connection.php";
if(isset($_POST['uid'])){
	mysqli_query($con,"UPDATE `student` SET `reg_no`='".$_POST['reg']."',`roll_no`='".$_POST['roll']."',`name`='".$_POST['name']."',`phone_no`='".$_POST['phone']."',`sem`='".$_POST['sem']."',`department`='".$_POST['department']."' WHERE `user_id` = '".$_POST['uid']."'");
	mysqli_query($con,"UPDATE `users` SET `email_id`='".$_POST['email']."' WHERE `user_id` = '".$_POST['uid']."'");
	echo '<td>
			'.$_POST['name'].'
	</td>
	<td>
			'.$_POST['roll'].'
	</td>
	<td>
			'.$_POST['reg'].'
	</td>
	<td>
			'.$_POST['department'].'
	</td>
	<td>
			'.$_POST['sem'].'
	</td>
	<td>
			'.$_POST['email'].'
	</td>
	<td>
			'.$_POST['phone'].'
	</td>
	<td>
		<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal'.$_POST['uid'].'"><i class="fa fa-folder"></i> View </button>
		<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModalone'.$_POST['uid'].'"><i class="fa fa-pencil"></i> Edit </button>
		<span class="disable btn btn-danger btn-xs" id='.$_POST['uid'].'><i class="fa fa-user"></i> Disabled User </span>
	</td>';
}
?>
