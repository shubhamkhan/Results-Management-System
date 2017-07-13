<?php
  include "../resources/header_admin.php";
  if(isset($_POST['hid']))
	{
    $result = mysqli_query($con, "SELECT `roll_no` FROM `student` WHERE `sem` = '".$_POST['sem']."' AND `department` = '".$_POST['dept']."'");
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
      //echo '<script>alert('.$row['roll_no'].');</script>';
      for ($i = 0; $i < count($_POST['sub_code']); $i++) {
          mysqli_query($con,"INSERT INTO `takes`(`roll_no`, `sub_code`, `sem`) VALUES ('".$row['roll_no']."','".$_POST['sub_code'][$i]."','".$_POST['sem']."')") or die(mysqli_error($con));
         }
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Department <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="dept" id="dept" class="select2_single form-control" tabindex="-1">
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

                      <div class="item form-group">
                         <label class="control-label col-md-3 col-sm-3 col-xs-12">Semester <span class="required">*</span>
 						            </label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <select name="sem" id="sem" class="select2_single form-control action" tabindex="-1">
 							              <option value=""Selected>Select Semester</option>
                             <option value="1">First</option>
                             <option value="2">Second</option>
                             <option value="3">Third</option>
                             <option value="4">Fourth</option>
                             <option value="5">Fifth</option>
                             <option value="6">Sixth</option>
                             <option value="7">Seventh</option>
                             <option value="8">Eighth</option>
                           </select>
                         </div>
                       </div>
                       <div id="subj_code">

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
<script>
$(document).ready(function(){
 $('.action').change(function(){
  if($(this).val() != '')
  {
    var action = $(this).attr("id");
    var query = $(this).val();
    var queryone = '';
    var result = '';
    if(action == "sem")
    {
     queryone = $('#dept').val();
     result = 'subj_code';
    }
    $.ajax({
      url: "fatch_takes_code.php",
      type: "POST",
      data: {action:action, query:query, queryone:queryone},
      success: function(data){
        $('#'+result).html(data);
      }
    })
  }
 });
});
</script>
