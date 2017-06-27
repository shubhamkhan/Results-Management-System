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
                <h3>TEACHES</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Teaches Details <small>List of topic taken for the teacher</small></h2>
                    <div class="pull-right">
                      <a href="admin_teaches_pdf.php" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Faculty Name</th>
                          <th>Department</th>
                          <th>Subject CODE</th>
                          <th>Semester</th>
                          <th>Action</th>
                        </tr>
                      </thead>
              				<tbody>
                					<?php
                							$res=mysqli_query($con,"SELECT `fac_id`, `sub_code`, `sem` FROM `teaches` ORDER BY `sem` ASC");
                							while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
                							{
                                $result = mysqli_query($con,"SELECT `name`, `department` FROM `faculty` WHERE `fac_id` = '".$row['fac_id']."' ORDER BY `department` ASC");
                                $fac_name = mysqli_fetch_array($result, MYSQLI_ASSOC);
                						?>
              						<tr>
                            <td><?php echo $fac_name['name']; ?> </td>
                            <td><?php echo $fac_name['department']; ?> </td>
              							<td><?php echo $row['sub_code']; ?> </td>
              							<td><?php echo $row['sem']; ?> </td>
              							<td>
                              <span class='delete btn btn-danger btn-xs' id="<?php echo $row['fac_id']; ?>"><i class="fa fa-trash-o"></i> Delete </span>
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
        url: 'admin_teaches_delete.php',
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
