<?php
  $logo = "<img src='../images/iiest-logo.png' width='50px' height='50px'>";
  $sitename = "<font color='#FFFFFF' size='+5'>Result Management System</font>";
	$server = "localhost";
  $user = "root";
  $password = "";
  $database = "rms_schema";
	$con = mysqli_connect("$server","$user","$password") or die('Could not connect: ' . mysqli_error());
		mysqli_select_db($con,"$database") or die('Query failed: ' . mysqli_error());
?>
