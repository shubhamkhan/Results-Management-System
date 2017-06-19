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
                <h3>Users</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Faculty Information</h2>
                    <div class="pull-right">
                      <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Address</th>
                          <th>Email ID</th>
                          <th>Phone No.</th>
						              <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
              						<?php
              						$res=mysqli_query($con,"SELECT `faculty`.`user_id`, `faculty`.`name`, `faculty`.`address`, `users`.`email_id`, `faculty`.`phone_no` FROM `faculty` JOIN `users` ON `faculty`.`user_id` = `users`.`user_id` WHERE `users`.`user_type`= 'Faculty' AND `users`.`user_status`='1'");
              						while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
              						{
              						?>
                        <tr>
              						<td><?php echo $row['name']; ?> </td>
              						<td><?php echo $row['address']; ?> </td>
              						<td><?php echo $row['email_id']; ?> </td>
              						<td><?php echo $row['phone_no']; ?> </td>
                          <td>
                            <a href="faculty_view.php?id=<?php echo $row['user_id'];?>" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            <a href="faculty_edit.php?id=<?php echo $row['user_id'];?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="enable_user.php?id=<?php echo $row['user_id'];?>" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i> Enable User </a>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
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
