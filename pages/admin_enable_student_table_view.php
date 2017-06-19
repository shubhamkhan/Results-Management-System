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
                          <th>Roll No.</th>
						              <th>Registration No.</th>
						              <th>Department</th>
						              <th>Semester</th>
                          <th>Address</th>
                          <th>Email ID</th>
                          <th>Phone No.</th>
						              <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
              						<?php
              						$res=mysqli_query($con,"SELECT `student`.`reg_no`, `student`.`roll_no`, `student`.`user_id`, `student`.`name`, `student`.`address`, `student`.`phone_no`, `student`.`sem`, `student`.`department`, `users`.`email_id` FROM `student` JOIN `users` ON `student`.`user_id` = `users`.`user_id` WHERE `users`.`user_type`= 'Student' and `users`.`user_status`='0'");
              						while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
              						{
              						?>
                        <tr>
              						<td><?php echo $row['name']; ?> </td>
                          <td><?php echo $row['roll_no']; ?> </td>
              					  <td><?php echo $row['reg_no']; ?> </td>
                          <td><?php echo $row['department']; ?> </td>
              						<td><?php echo $row['sem']; ?> </td>
              						<td><?php echo $row['address']; ?> </td>
              						<td><?php echo $row['email_id']; ?> </td>
              						<td><?php echo $row['phone_no']; ?> </td>
                          <td>
                            <a href="student_view.php?id=<?php echo $row['user_id'];?>" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            <a href="admin_student_edit.php?id=<?php echo $row['user_id'];?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="desabled_user.php?id=<?php echo $row['user_id'];?>" class="btn btn-danger btn-xs"><i class="fa fa-pencil"></i> Disabled User </a>
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
