<?php
  include "../resources/header_admin.php";
  if(isset($_POST['hid']))
	{
		mysqli_query($con,"INSERT INTO `subject`(`sub_code`, `sub_name`, `th_marks`, `pr_marks`, `total_marks`, `sem`) VALUES ('".$_POST['code']."','".$_POST['name']."','".$_POST['th']."','".$_POST['pr']."','".$_POST['total']."','".$_POST['sem']."')") or die(mysqli_error($con));
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
                <h3>SUBJECT ENTRY</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>ADD SUBJECT <small>details into the database</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form method="POST" action="" class="form-horizontal form-label-left" novalidate>
                      <span class="section">Subject Information</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Subject Code <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="code" placeholder="Enter subject code here e.g CS301" required="required" type="text">
                        </div>
                      </div>

					           <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Subject Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="name" placeholder="Enter subject name here e.g Data Structure and Algorithm" required="required" type="text">
                        </div>
                     </div>

                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Theory <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="number" name="th" placeholder="Enter theory marks only" required="required" data-validate-minmax="0,70" class="form-control col-md-7 col-xs-12">
                        </div>
                     </div>

					           <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Practical <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="number" name="pr" placeholder="Enter practical marks only" required="required" data-validate-minmax="0,30" class="form-control col-md-7 col-xs-12">
                        </div>
                     </div>

                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Total Marks <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="number" name="total" placeholder="Enter total marks only" required="required" data-validate-minmax="0,100" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Semester <span class="required">*</span>
						            </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="sem" class="select2_single form-control" tabindex="-1">
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

                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="reset" class="btn btn-primary">Reset</button>
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
