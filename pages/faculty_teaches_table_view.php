<?php
include "../resources/header_faculty.php";
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
                     <h2>Subject Details <small>List of subject teaches a teacher</small></h2>
                     <div class="pull-right">
                     </div>
                     <div class="clearfix"></div>
                   </div>

                   <div class="x_content">
                     <table id="datatable" class="table table-striped table-bordered">
                       <thead>
                         <tr>
                           <th>Department</th>
                           <th>Subject CODE</th>
                           <th>Semester</th>
                           <th>Action</th>
                         </tr>
                       </thead>
               				<tbody>
                 					<?php
                              $fac = mysqli_query($con,"SELECT `fac_id` FROM `faculty` WHERE `user_id` = '".$_SESSION['id']."'");
                              $fac_id = mysqli_fetch_array($fac, MYSQLI_ASSOC);
                 							$res=mysqli_query($con,"SELECT `sub_code`, `sem` FROM `teaches` WHERE `fac_id` = '".$fac_id['fac_id']."' ORDER BY `sem` ASC");
                 							while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
                 							{
                                $result=mysqli_query($con,"SELECT `sub_name`, `th_marks`, `pr_marks`, `total_marks`, `sem`, `department` FROM `subject` WHERE `sub_code` = '".$row['sub_code']."' ORDER BY `sem` ASC");
                                $sub=mysqli_fetch_array($result,MYSQLI_ASSOC);
                 						?>
               						<tr>
                             <td><?php echo $sub['department']; ?> </td>
               							<td><?php echo $row['sub_code']; ?> </td>
               							<td><?php echo $sub['sem']; ?> </td>
               							<td>
                              <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal<?php echo $row['sub_code']; ?>"><i class="fa fa-folder"></i> View </button>
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
                                    <div class="col-md-6 col-sm-6 col-xs-12"><p><?php echo $sub['sub_name']; ?></p></div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">Theory Marks</div>
                                    <div class="col-md-6 col-sm-6 col-xs-12"><p><?php echo $sub['th_marks']; ?></p></div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">Practical Marks</div>
                                    <div class="col-md-6 col-sm-6 col-xs-12"><p><?php echo $sub['pr_marks']; ?></p></div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">Total Marks</div>
                                    <div class="col-md-6 col-sm-6 col-xs-12"><p><?php echo $sub['total_marks']; ?></p></div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">Semester</div>
                                    <div class="col-md-6 col-sm-6 col-xs-12"><p><?php echo $sub['sem']; ?></p></div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">Department</div>
                                    <div class="col-md-6 col-sm-6 col-xs-12"><p><?php echo $sub['department']; ?></p></div>
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
