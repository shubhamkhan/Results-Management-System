<?php
SESSION_START();
if(!$_SESSION['khjshdagsj']){
  SESSION_DESTROY();
  header("location:index.php?msg=UnSuccessfully");
}
include "../resources/connection.php";
if(isset($_POST["action"]))
{
  $i = 1;
  $output = '';
  if($_POST["action"] == "sem")
  {
    if($_POST["query"])
    {
      $result = mysqli_query($con, "SELECT `sub_code`, `sub_name` FROM `subject` WHERE `sem` = '".$_POST["query"]."' AND `department` = '".$_POST["queryone"]."' ORDER BY `sub_code`");
    }
    while($row = mysqli_fetch_array($result))
    {
      if (strpos($row["sub_code"], '/') == FALSE) {
        $output .= '<div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Subject '.$i.'</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input name="sub_code[]" type="text" value="'.$row["sub_code"].'" class="form-control col-md-7 col-xs-12" readonly="readonly">
            </div>
          </div>';
         $i +=1;
      }
    }
  }
  echo $output;
}
 ?>
