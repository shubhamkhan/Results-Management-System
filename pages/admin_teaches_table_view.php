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
                <h3>Subject List</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Subject Details <small>Semester wise</small></h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <form class="form-horizontal form-label-left" method="POST" action="" novalidate>
                      <span class="section">Personal Info</span>
                        <table id="datatable" class="table table-striped table-bordered">
                          <thead>
                            <tr>
                              <th>Faculty ID</th>
                              <th>Faculty Name</th>
                              <th>Subject CODE</th>
                              <th>YEAR</th>
                              <th>Action</th>
                            </tr>
                          </thead>
              						<tbody>
                							<?php
                									$res=mysqli_query($con,"SELECT `fac_id`, `sub_code`, `year` FROM `teaches");
                									while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
                									{
                                    $result = mysqli_query($con,"SELECT `name` FROM `faculty` WHERE `fac_id` = '".$row['fac_id']."'");
                                    $fac_name = mysqli_fetch_array($result, MYSQLI_ASSOC);
                							 ?>
              								<tr>
              									<td><?php echo $row['fac_id']; ?> </td>
                                <td><?php echo $fac_name['name']; ?> </td>
              									<td><?php echo $row['sub_code']; ?> </td>
              									<td><?php echo $row['year']; ?> </td>
              									<td>
              											<a href="admin_teaches_delete.php?id=<?php echo $row['fac_id']; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
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
