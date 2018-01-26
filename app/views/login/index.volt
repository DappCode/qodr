<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  {{ stylesheet_link("assets/bower_components/bootstrap/dist/css/bootstrap.min.css")}}
  <!-- Font Awesome -->
  {{ stylesheet_link("assets/bower_components/font-awesome/css/font-awesome.min.css")}}
  <!-- Ionicons -->
  {{ stylesheet_link("assets/bower_components/Ionicons/css/ionicons.min.css")}}
  <!-- Theme style -->
  {{ stylesheet_link("assets/dist/css/AdminLTE.min.css")}}
  <!-- iCheck -->
  {{ stylesheet_link("assets/plugins/iCheck/square/blue.css")}}

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="login"><b> Keuangan QODR</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Please Login Your Account</p>

    <form action="{{url("login/aksiLogin")}}" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" placeholder="Username">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        
        
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
{{ javascript_include("assets/bower_components/jquery/dist/jquery.min.js")}}
<!-- Bootstrap 3.3.7 -->
{{ javascript_include("assets/bower_components/bootstrap/dist/js/bootstrap.min.js")}}
<!-- iCheck -->
{{ javascript_include("assets/plugins/iCheck/icheck.min.js")}}
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