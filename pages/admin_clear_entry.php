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
                <h3>CLEAR</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Clear Details <small>Clear record entry</small></h2>
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
              							<td> Subject Entry Clear </td>
              							<td>
                              <span class='delete btn btn-danger btn-xs' id="sec"><i class="fa fa-trash-o"></i> Delete </span>
              							</td>
              						</tr>
                          <tr>
              							<td> Teaches Entry Clear </td>
              							<td>
                              <span class='delete btn btn-danger btn-xs' id="teec"><i class="fa fa-trash-o"></i> Delete </span>
              							</td>
              						</tr>
                          <tr>
              							<td> Takes Entry Clear </td>
              							<td>
                              <span class='delete btn btn-danger btn-xs' id="taec"><i class="fa fa-trash-o"></i> Delete </span>
              							</td>
              						</tr>
                          <tr>
              							<td> Marks Entry Clear </td>
              							<td>
                              <span class='delete btn btn-danger btn-xs' id="mec"><i class="fa fa-trash-o"></i> Delete </span>
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
 $('.delete').click(function(){
  var el = this;
  var statusid = this.id;
  $.ajax({
   url: 'admin_settings.php',
   type: 'POST',
   data: { id:statusid },
   success: function(response){
     alert("Successfully");
   }
  });
 });
});
</script>
