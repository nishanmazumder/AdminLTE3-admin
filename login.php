<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cartlope Login</title>

  <!-- Google Font: Roboto -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.css">
  <link rel="stylesheet" href="dist/css/custom.css">
</head>

<body class="hold-transition login-page">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="login-box">
          <div class="login-logo">
            <a href="#">
              <img src="img/logo.png" alt="">
            </a>
          </div>
          <!-- /.login-logo -->
          <div class="card">
            <div class="card-body login-card-body">
              <p class="login-box-msg">Sign In</p>

              <form action="#" method="post">
                <div class="input-group mb-3">
                  <input type="email" class="form-control" placeholder="Email">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-envelope"></span>
                    </div>
                  </div>
                </div>
                <div class="input-group mb-3">
                  <input type="password" class="form-control" placeholder="Password">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-lock"></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-8 text-left">
                    <div class="icheck-warning">
                      <input type="checkbox" id="remember">
                      <label for="remember">
                        Remember Me
                      </label>
                    </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-md-4">
                    <button type="submit" class="btn btn-warning btn-block">Sign In</button>
                  </div>
                  <!-- /.col -->
                </div>
              </form>
              <!-- /.social-auth-links -->

              <p class="mb-1 nm-link text-left">
                <a href="forgot-password.php">Forgot Password?</a>
              </p>
            </div>
            <!-- /.login-card-body -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
</body>

</html>