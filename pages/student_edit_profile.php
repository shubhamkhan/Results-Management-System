<?php
SESSION_START();
if(!$_SESSION['ayukgcystf']){
	SESSION_DESTROY();
	header("location:index.php?msg=UnSuccessfully");
}
include "../resources/connection.php";
if(isset($_POST['uid'])){
	mysqli_query($con,"UPDATE `student` SET `name`='".$_POST['name']."',`phone_no`='".$_POST['phone']."',`address`='".$_POST['address']."' WHERE `user_id` = '".$_POST['uid']."'");
	mysqli_query($con,"UPDATE `users` SET `email_id`='".$_POST['email']."' WHERE `user_id` = '".$_POST['uid']."'");
	echo '<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Name</label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <p class="form-control-static">'.$_POST['name'].'</p>
    </div>
  </div>

  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <p class="form-control-static">'.$_POST['address'].'</p>
    </div>
  </div>

  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Phone No.</label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <p class="form-control-static">'.$_POST['phone'].'</p>
    </div>
  </div>

  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Email ID</label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <p class="form-control-static">'.$_POST['email'].'</p>
    </div>
  </div>';
}
?>
