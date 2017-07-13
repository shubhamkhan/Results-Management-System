<?php
  include "../resources/header_student.php";
  $get_data = mysqli_query($con, "SELECT `roll_no`, `sem`, `department` FROM `student` WHERE `user_id` = '".$_SESSION['id']."'");
  $data = mysqli_fetch_array($get_data,MYSQLI_ASSOC);
  if(isset($_POST['hid']))
	{
    mysqli_query($con,"INSERT INTO `takes`(`roll_no`, `sub_code`, `sem`) VALUES ('".$data['roll_no']."','".$_POST['sub_code']."','".$data['sem']."')") or die(mysqli_error($con));
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
                <h3>TAKES</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add takes Subject <small>Student takes Subject are recorded</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form method="POST" action="" class="form-horizontal form-label-left" novalidate>

                       <div class="item form-group">
                         <label class="control-label col-md-3 col-sm-3 col-xs-12">Elective Subject <span class="required">*</span>
                         </label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <select name="sub_code" id="sub_code" class="select2_single form-control" tabindex="-1">
                             <option value="" selected="">Select Elective Subject</option>
                             <?php
                             $res = mysqli_query($con, "SELECT `sub_code`, `sub_name` FROM `subject` WHERE `sem` = '".$data["sem"]."' AND `department` = '".$data["department"]."' ORDER BY `sub_code`");
                             while($ro = mysqli_fetch_array($res,MYSQLI_ASSOC)){
                               if (strpos($ro["sub_code"], '/') == TRUE) {
                                 echo '<option value='.$ro["sub_code"].'>'.$ro["sub_code"].'('.$ro["sub_name"].')</option>';
                               }
                             }
                            ?>
                           </select>
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
          </div>
        <!-- /page content -->
<!--  ===========================================================
		                        END PAGE
  		=========================================================== -->
<?php
  include "../resources/footer_all.php";
?>
