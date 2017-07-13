<?php
SESSION_START();
if(!$_SESSION['khjshdagsj']){
  SESSION_DESTROY();
  header("location:index.php?msg=UnSuccessfully");
}else {
  include "../resources/connection.php";
  if(isset($_POST['id']) == 'fme'){
    mysqli_query($con,"UPDATE `teaches` SET `status` = '0'");
    echo '<span class="status btn btn-danger btn-xs" id="fmd"><i class="fa fa-user"></i> Disabled </span>';
  }
  if(isset($_POST['id']) == 'fmd'){
    mysqli_query($con,"UPDATE `teaches` SET `status` = '1'");
    echo '<span class="status btn btn-success btn-xs" id="fme"><i class="fa fa-user"></i> Enable </span>';
  }
  if(isset($_POST['id']) == 'ste'){
    mysqli_query($con,"UPDATE `takes` SET `status` = '0'");
    echo '<span class="status btn btn-danger btn-xs" id="std"><i class="fa fa-user"></i> Disabled </span>';
  }
  if(isset($_POST['id']) == 'std'){
    mysqli_query($con,"UPDATE `takes` SET `status` = '1'");
    echo '<span class="status btn btn-success btn-xs" id="ste"><i class="fa fa-user"></i> Enable </span>';
  }

  if(isset($_POST['id']) == 'sec'){
    mysqli_query($con,"DELETE FROM `subject`");
  }
  if(isset($_POST['id']) == 'teec'){
    mysqli_query($con,"DELETE FROM `teaches`");
  }
  if(isset($_POST['id']) == 'taec'){
    mysqli_query($con,"DELETE FROM `takes`");
  }
  if(isset($_POST['id']) == 'mec'){
    mysqli_query($con,"DELETE FROM `marks`");
  }
}
 ?>
