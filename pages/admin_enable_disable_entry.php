<?php
  include "../resources/header_admin.php";
  $statusone = '0';
  $statustwo = '0';
  $teaches=mysqli_num_rows(mysqli_query($con,"SELECT `status` FROM `teaches` WHERE `status` = '1'"));
  $takes=mysqli_num_rows(mysqli_query($con,"SELECT `status` FROM `takes` WHERE `status` = '1'"));
  if($teaches >= 1){
    $statusone = '1';
  }
  if($takes >= 1){
    $statustwo = '1';
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
                <h3>SUBJECT</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Subject Details <small>Subject record list</small></h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                    <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Objective</th>
                          <th>Action</th>
                        </tr>
                      </thead>
              				<tbody>
              						<tr>
              							<td> Faculty marks entry </td>
              							<td>
                            <?php
                            if($statusone = '0'){
                              echo '<span class="status btn btn-success btn-xs" id="fme"><i class="fa fa-user"></i> Enable </span>';
                              }
                            if($statusone = '1'){
                              echo '<span class="status btn btn-danger btn-xs" id="fmd"><i class="fa fa-user"></i> Disabled </span>';
                              }
                              ?>
              							</td>
              						</tr>
                          <tr>
              							<td> Student choose subject </td>
              							<td>
                            <?php
                              if($statustwo = '0'){
                                echo '<span class="status btn btn-success btn-xs" id="ste"><i class="fa fa-user"></i> Enable </span>';
                                }
                              if($statustwo = '1'){
                                echo '<span class="status btn btn-danger btn-xs" id="std"><i class="fa fa-user"></i> Disabled </span>';
                                }
                              ?>
              							</td>
              						</tr>
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
 $('.status').click(function(){
  var el = this;
  var statusid = this.id;
  $.ajax({
   url: 'admin_settings.php',
   type: 'POST',
   data: { id:statusid },
   success: function(response){
    $(el).html(response);
   }
  });
 });
});
</script>
