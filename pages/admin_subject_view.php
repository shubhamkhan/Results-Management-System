<?php
  include "../resources/header_admin.php";


  ?>
<!-- ===========================================================
		                       BEGIN PAGE
		 =========================================================== -->
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Subjects</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Details of Subject <small>view</small></h2>
                    <div class="clearfix"></div>
                  </div>

                    <form class="form-horizontal form-label-left" method="POST" action="" novalidate>
                      <span class="section">Subject Info</span>
            						<?php
            							if(isset($_GET['id']))
            							{
            								$res=mysqli_query($con,"SELECT `sub_code`, `sub_name`, `th_marks`, `pr_marks`, `total_marks`, `sem` FROM `subject` WHERE `sub_code`='".$_GET['id']."'");
            								$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
            						?>
					            <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Subject Code</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <p class="form-control-static"><?php echo $row['sub_code']; ?> </p>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Subject Name </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <p class="form-control-static"><?php echo $row['sub_name']; ?> </p>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Theory Marks </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <p class="form-control-static"><?php echo $row['th_marks']; ?></p>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Practical Marks </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <p class="form-control-static"><?php echo $row['pr_marks']; ?></p>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Total Marks </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <p class="form-control-static"><?php echo $row['total_marks']; ?></p>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Semester</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <p class="form-control-static"><?php echo $row['sem']; ?></p>
                        </div>
                      </div>

                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <a href="admin_subject_table_view.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i>Back</a>
                          <a href="admin_subject_edit.php?id=<?php echo $row['sub_code']; ?>" class="btn btn-info"><i class="fa fa-pencil"></i>Edit</a>
                        </div>
                      </div>
                      <?php } ?>
                      <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
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
