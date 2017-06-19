<?php
  include "../resources/header_admin.php";
	if(isset($_GET['id']))
	{
		$res=mysqli_query($con,"SELECT `sub_code`, `sub_name`, `th_marks`, `pr_marks`, `total_marks`, `sem` FROM `subject` WHERE `sub_code`='".$_GET['id']."'");
		$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
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
                <h3>UPDATE SUBJECTS</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Information <small>about subjects</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form method="POST" action=""  class="form-horizontal form-label-left" novalidate>
                      <span class="section">Subject Information</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Subject Code <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" name="code" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="code" required="required" type="text" value="<?php echo $row['sub_code']; ?>" disabled>
                        </div>
                      </div>

					            <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Subject Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" name="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="name" required="required" type="text" value="<?php echo $row['sub_name']; ?>">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Theory <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="number" name="th" required="required" data-validate-minmax="0,70" class="form-control col-md-7 col-xs-12" value="<?php echo $row['th_marks']; ?>">
                        </div>
                      </div>

					            <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Practical <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="number" name="pr" required="required" data-validate-minmax="0,30" class="form-control col-md-7 col-xs-12" value="<?php echo $row['pr_marks']; ?>">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Total Marks <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="number" name="total" required="required" data-validate-minmax="0,100" class="form-control col-md-7 col-xs-12" value="<?php echo $row['total_marks']; ?>">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Semester <span class="required">*</span>
						            </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="sem" class="select2_single form-control" tabindex="-1">
                          <?php
                          $first ='';
                          $second = '';
                          $third = '';
                          $fourth ='';
                          $fifth = '';
                          $sixth ='';
                          $seventh = '';
                          $eighth ='';
                          switch ($row['sem']){
                                    case "1":
                                        $first = "selected";
                                        break;
                                    case "2":
                                        $second = "selected";
                                        break;
                                    case "3":
                                        $third = "selected";
                                        break;
                                    case "4":
                                        $fourth = "selected";
                                        break;
                                    case "5":
                                        $fifth = "selected";
                                        break;
                                    case "6":
                                        $sixth = "selected";
                                        break;
                                    case "7":
                                        $seventh = "selected";
                                        break;
                                    case "8":
                                        $eighth = "selected";
                                        break;
                                      }
                             ?>
                            <option value="1" <?php echo $first; ?>>First</option>
                            <option value="2" <?php echo $second; ?>>Second</option>
                            <option value="3" <?php echo $third; ?>>Third</option>
                            <option value="4" <?php echo $fourth; ?>>Fourth</option>
                            <option value="5" <?php echo $fifth; ?>>Fifth</option>
                            <option value="6" <?php echo $sixth; ?>>Sixth</option>
                            <option value="7" <?php echo $seventh; ?>>Seventh</option>
                            <option value="8" <?php echo $eighth; ?>>Eighth</option>
                          </select>
                        </div>
                       </div>

                       <div class="ln_solid"></div>

                       <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
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
  if(isset($_POST['hid']))
  {
    mysqli_query($con,"UPDATE `subject` SET `sub_name` = '".$_POST['name']."', `th_marks`= '".$_POST['th']."', `pr_marks` = '".$_POST['pr']."', `total_marks` = '".$_POST['total']."', `sem` = '".$_POST['sem']."' WHERE `sub_code` = '".$_GET['id']."'");
    header("location:admin_subject_table_view.php?msg=Succesfully Updated");
  }
  ?>
