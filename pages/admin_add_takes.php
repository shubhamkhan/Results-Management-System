<?php
  include "../resources/header_admin.php";
  if(isset($_POST['hid']))
	{
      for ($i = 0; $i < count($_POST['roll']); $i++) {
        mysqli_query($con,"INSERT INTO `takes`(`roll_no`, `sub_code`, `year`) VALUES ('".$_POST['roll'][$i]."','".$_POST['code'][$i]."','".$_POST['year'][$i]."')") or die(mysqli_error($con));
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
                      <table class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>Roll No</th>
                            <th>Subject Code</th>
                            <th>Year</th>
                          </tr>
                        </thead>
            						<tbody>
                          <?php
              							if(isset($_GET['id']))
              							{
                              $stu=mysqli_query($con,"SELECT `roll_no`, `sem` FROM `student` WHERE `user_id` = '".$_GET['id']."'");
                              $get_stu = mysqli_fetch_array($stu,MYSQLI_ASSOC);
              								$res=mysqli_query($con,"SELECT `sub_code`, `sem` FROM `subject` WHERE `sem`='".$get_stu['sem']."'");
                              while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
                              {
                                switch ($row['sem']) {
                                  case '1' or '2':
                                    $year = '1';
                                    break;
                                  case '3' or '4':
                                    $year = '2';
                                    break;
                                  case '5' or '6':
                                    $year = '3';
                                    break;
                                  case '7' or '8':
                                    $year = '4';
                                    break;
                                  default:
                                    $year = '';
                                    break;
                                }
              						?>
            							<tr>
                            <td>
            									<div class="item form-group">
            										<input id="takes" name="roll[]" type="text" value="<?php echo $get_stu['roll_no']; ?>" readonly="readonly" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2">
            									</div>
            								</td>
            								<td>
            									<div class="item form-group">
            										<input id="takes" name="code[]" type="text" value="<?php echo $row['sub_code']; ?>" readonly="readonly" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2">
            									</div>
            								</td>
            								<td>
            									<div class="item form-group">
            										<input id="takes" name="year[]" type="text" value="<?php echo $year; ?>" readonly="readonly" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2">
            									</div>
            								</td>
            							</tr>
                          <?php } ?>
            						</tbody>
					            </table>
                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <a href="admin_takes_table_view.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back </a>
            						  <button type="submit" class="btn btn-success">Submit</button>
                          <a href="admin_student_takes_table_view.php?id=<?php echo $get_stu['roll_no'];?>" class="btn btn-primary"><i class="fa fa-folder"></i> View </a>
            						  <input type="hidden" name="hid">
						            </div>
                      </div>
                      <?php } ?>
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
