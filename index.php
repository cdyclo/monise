<!DOCTYPE html>
<html>
<head>
 
  <title>Admin Monise | Log in</title>

    <?php
            include 'css.php';
            include 'js.php';
            ?>
  
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
      <a href="index.php"><b>Admin</b> Monise</a>
      <h5 class="login-box-msg">Monitoring & Evaluasi Sales Force</h5>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in</p>

      <form action="admin/index2.php" method="post">
        <div class="input-group mb-3">
          <input type="username" class="form-control" placeholder="Username">
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
         
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->


</body>
</html>
