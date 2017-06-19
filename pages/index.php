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
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <div class="login_wrapper">
        <div class="form login_form">
          <section class="login_content">
            <form role="form" action="login.php" method="POST">
              <h1>Login Form</h1>
              <div>
                <input class="form-control" placeholder="E-mail" name="e_mail" type="email" required autofocus />
              </div>
              <div>
                <input class="form-control" placeholder="Password" name="password" type="password" required />
              </div>
              <div class="form-group">
                  <div class="col-md-12">
                      <button type="submit" class="btn btn-lg bg_green btn-block">Login</button>
                      <input type="hidden" name="hid">
                  </div>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <div>
                  <h1><i class="fa fa-database"></i> Result Management System</h1>
                  <p>Copyright &copy; 2017. All rights reserved.</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
