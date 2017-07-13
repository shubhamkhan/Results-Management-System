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
                 <h3>SUBMIT MARKS</h3>
               </div>
             </div>

             <div class="clearfix"></div>

             <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                 <div class="x_panel">
                   <div class="x_title">
                     <h2><?php echo $_GET['id']; ?><small>NOTE: each and every entry submited only ones</small></h2>
                     <div class="pull-right">
                       <a href="faculty_student_subject.php" class="btn btn-default"><i class="fa fa-arrow-left"></i> Back</a>
                       <a href="faculty_student_marks_submit_pdf.php?id=<?php echo $_GET['id']; ?>" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
                     </div>
                     <div class="clearfix"></div>
                   </div>

                   <div class="x_content">
                     <table id="datatable" class="table table-striped table-bordered">
                       <thead>
                         <tr>
                           <th>Name</th>
                           <th>Subject CODE</th>
                           <th>Roll No.</th>
                           <th>Theory Marks</th>
                           <th>Practical Marks</th>
                           <th>Action</th>
                         </tr>
                       </thead>
               				<tbody>
                        <form method="POST" action="" class="form-horizontal form-label-left" novalidate>
                 					<?php
                          if(isset($_GET['id'])){
                              $result=mysqli_query($con,"SELECT `takes`.`take_id`, `takes`.`roll_no`, `takes`.`sub_code`, `student`.`name` FROM `takes` JOIN `student` ON `takes`.`roll_no` = `student`.`roll_no` WHERE `takes`.`sub_code` = '".$_GET['id']."' AND `takes`.`status` = '0'");
                 							while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                 							{
                 						?>
               						<tr>
                             <td><?php echo $row['name']; ?> </td>
               							<td><?php echo $row['sub_code']; ?> </td>
               							<td><?php echo $row['roll_no']; ?> </td>
                            <th>
                              <div class="item form-group">
                                   <input type="number" id="theory<?php echo $row['roll_no']; ?>" placeholder="Enter theory marks only" required="required" data-validate-minmax="0,70" class="form-control col-md-12 col-xs-12">
                              </div>
                            </th>
                            <th>
                              <div class="item form-group">
                                <input type="number" id="practical<?php echo $row['roll_no']; ?>" placeholder="Enter practical marks only" required="required" data-validate-minmax="0,30" class="form-control col-md-12 col-xs-12">
                              </div>
                            </th>
               							<td>
                              <span class='submit btn btn-success btn-xs' id="<?php echo $row['take_id']; ?>_<?php echo $row['roll_no']; ?>"><i class="fa fa-user"></i> Submit </span>
               							</td>
               						</tr>
                             <?php }} ?>
                           </form>
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
  $('.submit').click(function(){
   var el = this;
   var submitbtn = this.id;
   var split_btn = submitbtn.split("_");
   var take_id = split_btn[0];
   var insert_id = split_btn[1];
   var th = '#theory'.concat(insert_id);
   var pr = '#practical'.concat(insert_id);
   var theory = $(th).val();
   var practical = $(pr).val();
   if(theory != '' && practical != '')
   {
     $.ajax({
      url: 'submit_marks.php',
      type: 'POST',
      data: { id:take_id, theory:theory, practical:practical},
      success: function(response){
       $(el).closest('tr').css('background','SpringGreen');
       $(el).closest('tr').fadeOut(800, function(){
        $(this).remove();
       });
      }
     });
   }
  });
 });
 </script>
