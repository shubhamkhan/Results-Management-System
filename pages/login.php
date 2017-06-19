<?php
include "../resources/connection.php";
if(isset($_POST['hid']) and isset($_POST['e_mail']) and isset($_POST['password'])){
	$res = mysqli_query($con,"SELECT `user_id`,`email_id`,`password`,`user_type` FROM `users` WHERE `email_id`='".$_POST['e_mail']."' and `password`='".$_POST['password']."' and `user_status`='0'") or die(mysqli_error($con));
	$num = mysqli_num_rows($res);
	if($num == 1){
		$chk_usr = mysqli_fetch_array($res,MYSQLI_ASSOC);
		if($chk_usr['user_type'] == "Admin")
		{
			echo "LogIn".$chk_usr['user_type'];
		}
		if($chk_usr['user_type'] == "Faculty")
		{
			echo "LogIn".$chk_usr['user_type'];
		}
		if($chk_usr['user_type'] == "Student")
		{
			echo "LogIn".$chk_usr['user_type'];
		}
	}else{
		header("location:index.php?msg=Login UnSuccessfully");
	}
}
/*
			if($chk_usr['users_type'] == "Faculty"){
				$id_req =  mysqli_query($con,"SELECT `user_id`,`user_type` FROM `users` WHERE `email_id` = '".$_POST['e_mail']."'");
				$id_data = mysqli_fetch_array($id_req,MYSQLI_ASSOC);
				$req = mysqli_query($con"SELECT `user_id`,`name` FROM `faculty` WHERE `user_id` = '".$id_data['user_id']."'");
				$data = mysqli_fetch_array($req,MYSQLI_ASSOC);
				SESSION_START();
				$_SESSION['khjshdagsj'] = md5(time());
				$_SESSION['id'] = $data['user_id'];
				$_SESSION['name'] = $data['name'];
				$_SESSION['u_type'] = $data['user_type'];
				date_default_timezone_set('Asia/Kolkata');
				mysqli_query($con,"UPDATE `faculty` SET `last_log_in` = '".date("d-m-Y H:i:s")."' WHERE `faculty`.`user_id` = '".$chk_usr['user_id']."'");
				header("location:index.php?msg=Login Successfully");
			}
			if($chk_usr['users_type'] == "Student"){
				$id_req = mysqli_query($con,"SELECT `user_id`,`user_type` FROM `users` WHERE `email_id` = '".$_POST['e_mail']."'");
				$id_data = mysqli_fetch_array($id_req,MYSQLI_ASSOC);
				$req = mysqli_query($con,"SELECT `user_id`,`name` FROM `student` WHERE `user_id` = '".$id_data['user_id']."'");
				$data = mysqli_fetch_array($req,MYSQLI_ASSOC);
				SESSION_START();
				$_SESSION['khjshdagsj'] = md5(time());
				$_SESSION['id'] = $data['user_id'];
				$_SESSION['name'] = $data['name'];
				$_SESSION['u_type'] = $data['user_type'];
				date_default_timezone_set('Asia/Kolkata');
				mysqli_query($con,"UPDATE `student` SET `last_log_in` = '".date("d-m-Y H:i:s")."' WHERE `student`.`user_id` = '".$chk_usr['user_id']."'");
				header("location:index.php?msg=Login Successfully");
			}
	*/
?>
