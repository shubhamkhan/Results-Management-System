<?php
  include "../resources/connection.php";
  SESSION_START();
  if(!$_SESSION['khjshdagsj']){
    SESSION_DESTROY();
    header("location:index.php?msg=UnSuccessfully");
  }
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Result Management System</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="../vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>

    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title"><i class="fa fa-database"></i> <span>RM System</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Administrator</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-user"></i> User <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="admin_add_users.php">Add User</a></li>
                      <li><a>Show Users List<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li class="sub_menu"><a href="admin_enable_faculty_table_view.php">Faculty List</a>
                          </li>
                          <li><a href="admin_enable_student_table_view.php">Student List</a>
                          </li>
                        </ul>
                      </li>
                      <li><a>Show Users Disabled<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li class="sub_menu"><a href="admin_disabled_faculty_table_view.php">Disabled Faculty</a>
                          </li>
                          <li><a href="admin_disabled_student_table_view.php">Disabled Student</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-book"></i> Subject <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="admin_add_subject.php">Add Subject</a></li>
                      <li><a href="admin_subject_table_view.php">Show Subjects List</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-university"></i> Teaches <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="admin_add_teaches.php">Add Teaches</a></li>
                      <li><a href="admin_teaches_table_view.php">Teaches List</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-graduation-cap"></i> Takes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="admin_add_takes.php">Add Takes</a></li>
                      <li><a href="admin_takes_table_view.php">Subject Takes List</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-certificate"></i> Marks <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Marksheet</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-cogs"></i> Settings <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="admin_clear_entry.php">Clear Entry</a></li>
                      <li><a href="admin_enable_disable_entry.php">Enable/Disable Entry</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Administrator
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="admin_change_password.php"><i class="fa fa-lock pull-right"></i>Change Password</a></li>
                    <li><a href="about.php"><i class="fa fa-cogs pull-right"></i>About</a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i>Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
