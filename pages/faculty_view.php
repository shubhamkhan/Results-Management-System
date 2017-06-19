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
                <h3>User Information</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Faculty</h2>
                    <div class="clearfix"></div>
                  </div>

                    <form class="form-horizontal form-label-left" method="POST" action="" novalidate>
                      <span class="section">Personal Info</span>

          					  <?php
                      if(isset($_GET['id'])){
                        $res=mysqli_query($con,"SELECT `faculty`.`user_id`, `faculty`.`name`, `faculty`.`address`, `faculty`.`date_of_birth`, `faculty`.`phone_no`, `faculty`.`qualification`, `faculty`.`experience`, `faculty`.`join_date`, `faculty`.`last_log_in`, `users`.`email_id` FROM `faculty`, `users` WHERE `faculty`.`user_id`=`users`.`user_id` AND `faculty`.`user_id`='".$_GET['id']."' AND `users`.`user_type`= 'Faculty'");
          					    $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
                      ?>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Name</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <p class="form-control-static"><?php echo $row['name']; ?></p>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <p class="form-control-static"><?php echo $row['address']; ?></p>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Phone No.</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <p class="form-control-static"><?php echo $row['phone_no'];?></p>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Email ID</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <p class="form-control-static"><?php echo $row['email_id'];?></p>
                        </div>
                      </div>

					            <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <p class="form-control-static"><?php echo $row['date_of_birth'];?></p>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Join Date</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <p class="form-control-static"><?php echo $row['join_date'];?></p>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Qualification</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <p class="form-control-static"><?php echo $row['qualification'];?></p>
                        </div>
                      </div>

					            <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Experience</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <p class="form-control-static"><?php echo $row['experience'];?></p>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Last Login</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <p class="form-control-static"><?php echo $row['last_log_in'];?></p>
                        </div>
                      </div>

                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <a href="faculty_table_view.php" class="btn btn-info"><i class="fa fa-arrow-left"></i>Back</a>
                          <a href="faculty_edit.php?id=<?php echo $row['user_id']?>" button id="send" type="submit" class="btn btn-info"><i class="fa fa-pencil"></i>Edit</button></a>
                        </div>
                      </div>

                      <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i>Generate PDF</button>
                    </form>
					          <?php }	?>
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
