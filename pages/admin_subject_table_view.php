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
                <h3>SUBJECT</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Subject Details <small>Subject record list</small></h2>
                    <div class="pull-right">
                      <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Subject Code</th>
                          <th>Subject Name</th>
                          <th>Semester</th>
                          <th>Action</th>
                        </tr>
                      </thead>
              				<tbody>
                					<?php
                							$res=mysqli_query($con,"SELECT `sub_code`, `th_marks`, `pr_marks`, `total_marks`, `sub_name`, `sem` FROM `subject`");
                							while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
                							{
                					?>
              						<tr>
              							<td><?php echo $row['sub_code']; ?> </td>
              							<td><?php echo $row['sub_name']; ?> </td>
              							<td><?php echo $row['sem']; ?> </td>
              							<td>
                                <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal<?php echo $row['sub_code']; ?>"><i class="fa fa-folder"></i> View </button>
                                <span class='delete btn btn-danger btn-xs' id="<?php echo $row['sub_code']; ?>"><i class="fa fa-trash-o"></i> Delete </span>
              							</td>
              						</tr>

                            <!-- View Modal -->
                            <div class="modal fade" tabindex="-1" id="myModal<?php echo $row['sub_code']; ?>" role="dialog">
                              <div class="modal-dialog" role="document">
                                <!-- View Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h2 class="modal-title">Subject details</h2>
                                  </div>
                                  <div class="modal-body">
                                    <div class="row">
                                      <div class="col-md-6 col-sm-6 col-xs-12">Subject Code</div>
                                      <div class="col-md-6 col-sm-6 col-xs-12"><p><?php echo $row['sub_code']; ?></p></div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-6 col-sm-6 col-xs-12">Subject Name</div>
                                      <div class="col-md-6 col-sm-6 col-xs-12"><p><?php echo $row['sub_name']; ?></p></div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-6 col-sm-6 col-xs-12">Theory Marks</div>
                                      <div class="col-md-6 col-sm-6 col-xs-12"><p><?php echo $row['th_marks']; ?></p></div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-6 col-sm-6 col-xs-12">Practical Marks</div>
                                      <div class="col-md-6 col-sm-6 col-xs-12"><p><?php echo $row['pr_marks']; ?></p></div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-6 col-sm-6 col-xs-12">Total Marks</div>
                                      <div class="col-md-6 col-sm-6 col-xs-12"><p><?php echo $row['total_marks']; ?></p></div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-6 col-sm-6 col-xs-12">Semester</div>
                                      <div class="col-md-6 col-sm-6 col-xs-12"><p><?php echo $row['sem']; ?></p></div>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div>

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
      url: 'admin_subject_delete.php',
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
