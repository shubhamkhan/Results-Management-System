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
                <h3>TAKES</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Takes Details <small>List of subjects taken for the student</small></h2>
                    <div class="pull-right">
                      <a href="admin_takes_pdf.php" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Roll No</th>
                          <th>Subject Code</th>
                          <th>Department</th>
                          <th>Year</th>
                          <th>Action</th>
                        </tr>
                      </thead>
              				<tbody>
                					<?php
                							$res=mysqli_query($con,"SELECT `takes`.`take_id`, `takes`.`roll_no`, `takes`.`sub_code`, `takes`.`year`, `student`.`department` FROM `takes` JOIN `student` ON `takes`.`roll_no` = `student`.`roll_no` ORDER BY `department`, `year` ASC");
                							while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
                							{
                					?>
              						<tr>
              							<td><?php echo $row['roll_no']; ?> </td>
              							<td><?php echo $row['sub_code']; ?> </td>
                            <td><?php echo $row['department']; ?> </td>
              							<td><?php echo $row['year']; ?> </td>
              							<td>
                                <span class='delete btn btn-danger btn-xs' id="<?php echo $row['take_id']; ?>"><i class="fa fa-trash-o"></i> Delete </span>
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
<script>
$(document).ready(function(){
 $('.delete').click(function(){
  var el = this;
  var deleteid = this.id;
  $.ajax({
   url: 'admin_takes_delete.php',
   type: 'POST',
   data: { id:deleteid },
   success: function(response){
    $(el).closest('tr').css('background','tomato');
    $(el).closest('tr').fadeOut(800, function(){
     $(this).remove();
    });
   }
  });
 });
});
</script>
