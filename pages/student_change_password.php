<?php
include "../resources/header_student.php";
if(isset($_POST['hid'])){
    $result = mysqli_query($con,"SELECT `password` FROM `users` WHERE `user_id`='".$_SESSION['id']."' and `user_status`='0'") or die(mysqli_error($con));
    $usr_pass = mysqli_fetch_array($result,MYSQLI_ASSOC);
    if (password_verify($_POST['old_pass'], $usr_pass['password'])){
      $pass_word = password_hash($_POST['password'], PASSWORD_DEFAULT);
      mysqli_query($con,"UPDATE `users` SET `password` = '".$pass_word."' WHERE `user_id` = '".$_SESSION['id']."'");
      echo '<script type="text/javascript">alert("Successfully")</script>';
    }else{
      echo '<script type="text/javascript">alert("UnSuccessfully")</script>';
    }
  }
?>
<!-- ===========================================================
		                       BEGIN PAGE
		 =========================================================== -->
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h2>USERS</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <form class="form-horizontal form-label-left" method="POST" action="" novalidate>
                      <span class="section">Change Password</span>
					            <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="old_pass">Old Password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" id="old_pass" name="old_pass" required="required" class="form-control col-md-7 col-xs-12" placeholder="Password" data-validate-length-range="6" data-validate-words="1">
						            </div>
                      </div>

                      <div class="item form-group">
                        <label for="password" class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" name="password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label for="confirm_password" class="control-label col-md-3 col-sm-3 col-xs-12">Repeat Password</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" name="confirm_password" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>

                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Submit</button>
                          <input type="hidden" name="hid">
                        </div>
                      </div>
					         </form>
				         </div>
                </div>
              </div>
            </div>
          </div>
        <!-- /page content -->
<!--  ===========================================================
		                        END PAGE
  		=========================================================== -->
<?php
  include "../resources/footer_all.php";
?>
