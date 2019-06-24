<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
  <link rel="icon" href="../img/favicon.ico" type="image/x-icon">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="/css/sb-admin-2.css" rel="stylesheet">
  <link href="/css/Login-Form-Dark.css" rel="stylesheet">
  <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>
  <div id="app">
        @include('Admin.flash-message')


        @yield('content')
    </div>

<body class="bg-gradient-primary">
  <div class="login-dark">
    <form action="/loginAuth" method="POST">
      {{ csrf_field() }}
      <h2 class="sr-only">Login Form</h2>
      <div class="illustration">
        <img class="login-logo" src="/img/hexacom.png">
        <br>
        <h2 class="login-welcome">Welcome Back!</h2>
      </div>
      <div class="form-group">
        <input class="form-control" type="text" name="username" placeholder="Enter Username...">
      </div>
      <div class="form-group">
        <input class="form-control" type="password" name="password" placeholder="Password">
      </div>
      <div class="form-group">
        <button class="btn btn-primary btn-block" type="submit">Log In</button>
      </div>
    </form>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
