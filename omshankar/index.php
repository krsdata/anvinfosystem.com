<?php
session_start();
if(isset($_SESSION['adminuserid']) && $_SESSION['adminuserid']!='')
{
	echo "<script>window.location = 'dashboard'</script>";
}
?>
<!DOCTYPE html><html><head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Omshankar</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>  <script src="js/custom.js"></script>
</head>
<style>
.login-box-body, .register-box-body
{
	background:#e1e1e1
}
</style>
<body class="hold-transition login-page" style="background:#fff;">
<div class="login-box">
  <div class="login-logo" style="display:inline-block; width:100%;">
    <a href="index.php"><img src="../img/logo.png" width="50"></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in</p>

    <form action="#" method="post">     
	<p class="alert alert-danger" id="loginerror" style="display:none"></p>	 
      <div class="form-group has-feedback">
        <input type="text" id="username" class="form-control" placeholder="Admin UserId">
        <span class="fa fa-user form-control-feedback" style="color:#DA1E23"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" id="password" class="form-control" placeholder="Password">
        <span class="fa fa-lock form-control-feedback" style="color:#DA1E23"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" id="rememberme" value=""> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="button" onclick="Dologin();" class="btn btn-danger btn-block btn-flat"><i class="fa fa-spinner fa-spin" id="loader" style="font-size:24px;display:none;"></i>Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
   

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
