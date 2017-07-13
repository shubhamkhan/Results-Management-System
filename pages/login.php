<?php
include "../resources/connection.php";
if(isset($_POST['hid']) and isset($_POST['e_mail']) and isset($_POST['password'])){
	$result = mysqli_query($con,"SELECT `user_id`, `password` FROM `users` WHERE `email_id`='".$_POST['e_mail']."' and `user_status`='0'") or die(mysqli_error($con));
	$usr_pass = mysqli_fetch_array($result,MYSQLI_ASSOC);
	if (password_verify($_POST['password'], $usr_pass['password'])) {
		$res = mysqli_query($con,"SELECT `user_id`,`email_id`,`password`,`user_type` FROM `users` WHERE `user_id`='".$usr_pass['user_id']."' and `user_status`='0'") or die(mysqli_error($con));
		$num = mysqli_num_rows($res);
		if($num == 1){
			date_default_timezone_set('Asia/Kolkata');
			$chk_usr = mysqli_fetch_array($res,MYSQLI_ASSOC);
			if($chk_usr['user_type'] == "Admin")
			{
				SESSION_START();
				$_SESSION['khjshdagsj'] = md5(time().$chk_usr['user_id']);
				$_SESSION['id'] = $chk_usr['user_id'];
				header("location:admin_add_users.php?msg=Successfully");
			}
			if($chk_usr['user_type'] == "faculty")
			{
				SESSION_START();
				$_SESSION['jhdhgyebha'] = md5(time().$chk_usr['user_id']);
				$_SESSION['id'] = $chk_usr['user_id'];
				mysqli_query($con,"UPDATE `faculty` SET `last_log_in` = '".date('Y-d-m h:i:s', time())."' WHERE `user_id` = '".$chk_usr['user_id']."'");
				header("location:faculty_view_profile.php?msg=Successfully");
			}
			if($chk_usr['user_type'] == "student")
			{
				SESSION_START();
				$_SESSION['ayukgcystf'] = md5(time().$chk_usr['user_id']);
				$_SESSION['id'] = $chk_usr['user_id'];
				mysqli_query($con,"UPDATE `student` SET `last_log_in` = '".date('Y-d-m h:i:s', time())."' WHERE `user_id` = '".$chk_usr['user_id']."'");
				header("location:student_view_profile.php?msg=Successfully");
			}
		}else{
			header("location:index.php?msg=Login UnSuccessfully");
		}
	} else {
	    header("location:index.php?msg=Login UnSuccessfully");
	}
}

			/*if($chk_usr['users_type'] == "Faculty"){
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
