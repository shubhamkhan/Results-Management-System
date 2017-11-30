<?php
  include "../resources/header_admin.php";
  if(isset($_POST['hid'])){
    $address = $_POST['city'] .','. $_POST['dist'] .','. $_POST['state'] .','. $_POST['cnty'] .','. $_POST['pin'];
    $user_id = time()+1;
    $pass_word = password_hash($_POST['password'], PASSWORD_DEFAULT);
    date_default_timezone_set('Asia/Kolkata');
    if($_POST['usrType'] == 'student'){
      mysqli_query($con, "INSERT INTO `users`(`user_id`, `email_id`, `password`, `user_type`, `user_status`) VALUES ('".$user_id."','".$_POST['email']."','".$pass_word."','".$_POST['usrType']."','0')");
      mysqli_query($con, "INSERT INTO `student`(`reg_no`, `roll_no`, `user_id`, `name`, `address`, `phone_no`, `date_of_birth`, `sem`, `department`, `reg_date`) VALUES ('".$_POST['reg_no']."','".$_POST['roll_no']."','".$user_id."','".$_POST['name']."','".$address."','".$_POST['phone']."','".date("Y-m-d", strtotime($_POST['dob']))."','".$_POST['sem']."','".$_POST['dept']."','".date("Y",time())."')");
    }
    if($_POST['usrType'] == 'faculty'){
      $fac_id = time();
      mysqli_query($con, "INSERT INTO `users`(`user_id`, `email_id`, `password`, `user_type`, `user_status`) VALUES ('".$user_id."','".$_POST['email']."','".$pass_word."','".$_POST['usrType']."','0')");
      mysqli_query($con, "INSERT INTO `faculty`(`fac_id`, `user_id`, `name`, `address`, `date_of_birth`, `phone_no`, `department`, `join_date`) VALUES ('".$fac_id."','".$user_id."','".$_POST['name']."','".$address."','".date("Y-m-d", strtotime($_POST['dob']))."','".$_POST['phone']."','".$_POST['dept']."','".date("Y-m-d",time())."')");
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
                <h3>USER</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add User <small>Add a new Faculty or Student</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form method="POST" action="" class="form-horizontal form-label-left" novalidate>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select User Type</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="usrType" id="usrType" class="select2_single form-control" tabindex="-1">
                            <option value="student" selected="">Student</option>
                            <option value="faculty">Faculty</option>
                          </select>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Full name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="50" data-validate-words="2" name="name" placeholder="Type both name(s) e.g Jon Doe" required="required" type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone">Mobile number <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" name="phone" required="required" data-validate-length-range="10,11" placeholder="10 digit mobile no." class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone">Date of birth <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <fieldset>
                            <div class="control-group">
                              <div class="controls">
                                <div class="col-md-7 col-xs-12 xdisplay_inputx form-group has-feedback">
                                  <input name="dob" type="text" class="form-control has-feedback-left" id="single_cal4" aria-describedby="inputSuccess2Status4">
                                  <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                  <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                                </div>
                              </div>
                            </div>
                          </fieldset>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city">City </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="city" data-validate-length-range="5,20" placeholder="Type city's name" class="optional form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dist">District </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="dist" data-validate-length-range="5,20" placeholder="Type district's name" class="optional form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="state">State </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="state" data-validate-length-range="5,20" placeholder="Type state's name" class="optional form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cnty">Country </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="cnty" data-validate-length-range="5,20" placeholder="Type country's name" class="optional form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pin">Pincode <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" name="pin" data-validate-length-range="6,6"  placeholder="Type PIN code here" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" name="email" required="required" placeholder="Enter e-mail here e.g jondoe@gmail.com" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="confirm_email">Confirm Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" name="confirm_email" data-validate-linked="email" required="required" placeholder="Confirm email e.g jondoe@gmail.com" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                      <div class="item form-group">
                        <label for="password" class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" name="password" data-validate-length="7,20" placeholder="Must use atleast 8 digit" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label for="confirm_password" class="control-label col-md-3 col-sm-3 col-xs-12">Retype Password</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" name="confirm_password" data-validate-linked="password" placeholder="Retype the above password" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Department</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="dept" class="select2_single form-control" tabindex="-1">
                            <option value="" selected="">Select Department</option>
                  					<option value="CSE">Computer Science and Engineering</option>
                            <option value="IT">Information Technology</option>
                  					<option value="ECE">Electronics and Telecommunication Engineering</option>
                  					<option value="ME">Mechanical Engineering</option>
                            <option value="EE">Electrical Engineering</option>
                            <option value="CE">Civil Engineering</option>
                          </select>
                        </div>
                      </div>

                      <div id="semType" class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Semester</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="sem" class="select2_single form-control" tabindex="-1">
                            <option value="" selected="">Select Semester</option>
                            <option value="1">First Semester</option>
                            <option value="3">Third Semester</option>
                          </select>
                        </div>
                      </div>

                      <div id="rollType" class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="roll_no">Roll No. <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" name="roll_no" required="required" data-validate-length-range="11,12" placeholder="Type 11 digit roll no." class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div id="regType" class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="reg_no">Reg. No. <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" name="reg_no" required="required" data-validate-length-range="12,13" placeholder="Type 12 digit registration no." class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <a href="admin_enable_faculty_table_view.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i>Back</a>
                          <button type="submit" class="btn btn-success">Submit</button>
                          <button type="reset" class="btn btn-primary">Reset</button>
                          <input type="hidden" name="hid">
                        </div>
                      </div>
                    </form>
                  </div>
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
<script>
  $( document ).ready(function(){
    $('#usrType').change(function(){
        selection = $(this).val();
        switch(selection)
        {
            case 'student':
                $('#semType').show();
                $('#rollType').show();
                $('#regType').show();
                break;
            default:
                $('#semType').hide();
                $('#rollType').hide();
                $('#regType').hide();
                break;
        }
    });
});
</script>
