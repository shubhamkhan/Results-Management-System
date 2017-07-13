<?php
  include "../resources/header_student.php";
 ?>
<!-- ===========================================================
		                       BEGIN PAGE
		 =========================================================== -->
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Marksheet</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Marksheet Details <small></small></h2>
                    <div class="pull-right">
                      <a href="student_marksheet_pdf.php" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                    <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Subject Code</th>
                          <th>Subject Offered</th>
                          <th>Full Marks</th>
                          <th>Theory Marks</th>
                          <th>Practical Marks</th>
                          <th>Subject Total</th>
                        </tr>
                      </thead>
              				<tbody>
                					<?php
                              $roll=mysqli_fetch_array(mysqli_query($con,"SELECT `roll_no` FROM `student` WHERE `user_id` ='".$_SESSION['id']."'"), MYSQLI_ASSOC);
                						  $res=mysqli_query($con,"SELECT `subject`.`sub_code`, `subject`.`sub_name`,`subject`.`total_marks`,`takes`.`sub_code`,`takes`.`take_id`,`takes`.`roll_no`,`marks`.`take_id`, `marks`.`theory_marks`,`marks`.`practical_marks`,`marks`.`total_marks`, `marks`.`pass_fail` FROM `takes` JOIN `marks` ON `marks`.`take_id` =`takes`.`take_id` JOIN `subject` ON `subject`.`sub_code` =`takes`.`sub_code` WHERE `takes`.`roll_no`='".$roll['roll_no']."'");
                							while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
                							{
                          ?>
              						<tr>
              							<td><?php echo $row['sub_code']; ?> </td>
              							<td><?php echo $row['sub_name']; ?></td>
                            <td>100</td>
              							<td><?php echo $row['theory_marks']; ?></td>
                            <td><?php echo $row['practical_marks']; ?></td>
                            <td><?php echo $row['total_marks']; ?></td>
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
<!--  ===========================================================
  		                        END PAGE
      =========================================================== -->
<?php
include "../resources/footer_all.php";
?>
