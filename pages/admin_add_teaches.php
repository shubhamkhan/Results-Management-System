<?php
  include "../resources/header_admin.php";
  if(isset($_POST['hid']))
  {
    mysqli_query($con, "INSERT INTO `teaches` (`fac_id`, `sub_code`, `sem`, `status`) VALUES ('".$_POST["fact_name"]."', '".$_POST["subj_code"]."', '".$_POST["sem"]."', '0')") or die(mysqli_error($con));
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
                <h3>TEACHES</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add Teaches <small>Set the topic for the teacher </small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form method="POST" action="" class="form-horizontal form-label-left" novalidate>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Department</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="dept" id="dept" class="select2_single form-control action" tabindex="-1">
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Semester</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="sem" id="sem" class="select2_single form-control action" tabindex="-1">
                            <option selected="">Select Semester</option>
                            <option value="1">First Semester</option>
                            <option value="2">Second Semester</option>
                            <option value="3">Thard Semester</option>
                            <option value="4">Forth Semester</option>
                            <option value="5">Fifth Semester</option>
                            <option value="6">Sixth Semester</option>
                            <option value="7">Seven Semester</option>
                            <option value="8">Eight Semester</option>
                          </select>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Subject Code</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="subj_code" id="subj_code" class="select2_single form-control action" tabindex="-1">
                            <option selected="">Select Subject Code</option>
                          </select>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Faculty Name</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="fact_name" id="fact_name" class="select2_single form-control" tabindex="-1">
                            <option selected="">Select Faculty Name</option>
                          </select>
                        </div>
                      </div>

                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <a href="admin_teaches_table_view.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i>Back</a>
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
    if(action == "subj_code")
    {
     result = 'fact_name';
    }
    $.ajax({
      url: "fatch_teaches_code.php",
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
