<?php
  include "../resources/header_admin.php";
  //echo '<script type="text/javascript"> alert('.$_SESSION['id'].')</script>';
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

                    <form class="form-horizontal form-label-left" method="POST" action="" novalidate>
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
                          <input name="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="both name(s) e.g Jon Doe" required="required" type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone">Mobile number <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" name="phone" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city">City </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="city" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dist">District </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="dist" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="state">State </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="state" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cnty">Country </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="cnty" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pin">Pincode <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" name="pin" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="confirm_email">Confirm Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" name="confirm_email" data-validate-linked="email" required="required" class="form-control col-md-7 col-xs-12">
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

                      <div id="deptType" class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Department</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="dept" class="select2_single form-control" tabindex="-1">
                            <option value="" selected="">Select Department</option>
                  					<option name="CSE" value="cst">Computer Science and Engineering</option>
                            <option name="IT" value="it">Information Technology</option>
                  					<option name="ECE" value="ece">Electronics and Telecommunication Engineering</option>
                  					<option name="ME" value="me">Mechanical Engineering</option>
                            <option name="EE" value="ee">Electrical Engineering</option>
                            <option name="CE" value="ce">Civil Engineering</option>
                          </select>
                        </div>
                      </div>

                      <div id="semType" class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Semester</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="sem" class="select2_single form-control" tabindex="-1">
                            <option value="" selected="">Select Semester</option>
                            <option value="1">First Semester</option>
                            <option value="3">Third Semester</option>
                          </select>
                        </div>
                      </div>

                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <a href="admin_enable_faculty_table_view.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i>Back</a>
                          <button type="submit" class="btn btn-success">Submit</button>
                          <button type="reset" class="btn btn-primary">Reset</button>
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
  if(isset($_POST['submit'])){
    $address = $_POST['city'] .','. $_POST['dist'] .','. $_POST['state'] .','. $_POST['cnty'] .','. $_POST['pin'];
    $user_id = '';
    if($_POST['usrType'] == 'student'){
      $roll_no = '';
      $reg_no = '';
      switch ($_POST["dept"]) {
        case 'CSE':
          # code...
          break;
        case 'IT':
          # code...
          break;
        case 'ECE':
          # code...
          break;
        case 'ME':
          # code...
          break;
        case 'EE':
          # code...
          break;
        case 'CE':
          # code...
          break;

        default:
          # code...
          break;
      }
      date_default_timezone_set('Asia/Kolkata');
      mysqli_query($con, "INSERT INTO `users`(`user_id`, `email_id`, `password`, `user_type`, `user_status`) VALUES ('".$user_id."','".$_POST['email']."','".$_POST['password']."','".$_POST['usrType']."','0')");
      mysqli_query($con, "INSERT INTO `student`(`reg_no`, `roll_no`, `user_id`, `name`, `address`, `phone_no`, `sem`, `department`, `reg_date`) VALUES ('".$reg_no."','".$roll_no."','".$user_id."','".$_POST['name']."','".$address."','".$_POST['phone']."','".$_POST['sem']."','".$_POST['dept']."','".date("d-m-Y H:i:s")."')");
    }
    if($_POST['usrType'] == 'faculty'){
      date_default_timezone_set('Asia/Kolkata');
      mysqli_query($con, "INSERT INTO `users`(`user_id`, `email_id`, `password`, `user_type`, `user_status`) VALUES ('".$user_id."','".$_POST['email']."','".$_POST['password']."','".$_POST['usrType']."','0')");
      mysqli_query($con, "INSERT INTO `faculty`(`user_id`, `name`, `address`,`phone_no`, `join_date`) VALUES ('".$user_id."','".$_POST['name']."','".$address."','".$_POST['phone']."','".date("d-m-Y H:i:s")."')");
    }
	}
?>
<script>
  $( document ).ready(function(){
    $('#usrType').change(function(){
        selection = $(this).val();
        switch(selection)
        {
            case 'student':
                $('#deptType').show();
                $('#semType').show();
                break;
            default:
                $('#deptType').hide();
                $('#semType').hide();
                break;
        }
    });
});
</script>
