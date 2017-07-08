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
                <h3>User Information</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Profile</h2>
                    <div class="clearfix"></div>
                  </div>

                    <form class="form-horizontal form-label-left" method="POST" action="" novalidate>
          					  <?php
                      if(isset($_SESSION['id'])){
                        $res=mysqli_query($con,"SELECT `faculty`.`user_id`, `faculty`.`name`, `faculty`.`address`, `faculty`.`date_of_birth`, `faculty`.`phone_no`, `faculty`.`qualification`, `faculty`.`experience`, `faculty`.`join_date`, `users`.`email_id` FROM `faculty` JOIN `users` ON `faculty`.`user_id`=`users`.`user_id` WHERE `faculty`.`user_id`='".$_SESSION['id']."' AND `users`.`user_type`= 'Faculty'");
          					    $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
                      ?>
                    <div id="token">
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Name</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <p class="form-control-static"><?php echo $row['name']; ?></p>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <p class="form-control-static"><?php echo $row['address']; ?></p>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Phone No.</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <p class="form-control-static"><?php echo $row['phone_no'];?></p>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Email ID</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <p class="form-control-static"><?php echo $row['email_id'];?></p>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Qualification</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <p class="form-control-static"><?php echo $row['qualification'];?></p>
                        </div>
                      </div>

					            <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Experience</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <p class="form-control-static"><?php echo $row['experience'];?></p>
                        </div>
                      </div>
                    </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <p class="form-control-static"><?php echo $row['date_of_birth'];?></p>
                         </div>
                       </div>

                       <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Join Date</label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <p class="form-control-static"><?php echo $row['join_date'];?></p>
                          </div>
                        </div>

                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalone"><i class="fa fa-pencil"></i> Edit </button>
                        </div>
                      </div>
                    </form>

                    <!-- Edit Modal -->
                    <div class="modal fade" tabindex="-1" id="myModalone" role="dialog">
                      <div class="modal-dialog" role="document">
                        <!-- Edit Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h2 class="modal-title">Profile edit</h2>
                          </div>
                          <div class="modal-body">
                            <form method="POST" class="contact form-horizontal form-label-left" novalidate>
                              <div class="form-group">
                                <label for="name" class="form-control-label">Name </label>
                                <input name="name" type="text" value="<?php echo $row['name']; ?>" id="name" class="form-control" data-validate-length-range="6" data-validate-words="1" required="required">
                              </div>
                              <div class="form-group">
                                <label for="phone" class="form-control-label">Phone No. </label>
                                <input name="phone" type="text" value="<?php echo $row['phone_no']; ?>" id="phone" class="form-control" data-validate-length-range="6" data-validate-words="1" required="required">
                              </div>
                              <div class="form-group">
                                <label for="email" class="form-control-label">Email ID </label>
                                <input name="email" type="text" value="<?php echo $row['email_id']; ?>" id="email" class="form-control" data-validate-length-range="6" data-validate-words="1" required="required">
                              </div>
                              <div class="form-group">
                                <label for="name" class="form-control-label">Address </label>
                                <input name="name" type="text" value="<?php echo $row['address']; ?>" id="address" class="form-control" data-validate-length-range="6" data-validate-words="1" required="required">
                              </div>
                              <div class="form-group">
                                <label for="name" class="form-control-label">Qualification </label>
                                <input name="name" type="text" value="<?php echo $row['qualification']; ?>" id="qualification" class="form-control" data-validate-length-range="6" data-validate-words="1" required="required">
                              </div>
                              <div class="form-group">
                                <label for="name" class="form-control-label">Experience </label>
                                <input name="name" type="text" value="<?php echo $row['experience']; ?>" id="experience" class="form-control" data-validate-length-range="6" data-validate-words="1" required="required">
                              </div>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button class="submit btn btn-success" id="submit_<?php echo $_SESSION['id']; ?>">Submit</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>

					          <?php }	?>
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
 $(".submit").click(function(){
   var id = this.id;
   var split_btn = id.split("_");
   var update_id = split_btn[1];
   var name = $('#name').val();
   var phone = $('#phone').val();
   var email = $('#email').val();
   var address = $('#address').val();
   var qualification = $('#qualification').val();
   var experience = $('#experience').val();
    $.ajax({
       type: "POST",
       url: "faculty_edit_profile.php",
       data: { uid:update_id, name:name, phone:phone, email:email, address:address, qualification:qualification, experience:experience},
       success: function(response){
             $('#token').html(response);
             $('#myModalone').modal('hide');
           }
         });
    });
});
</script>
