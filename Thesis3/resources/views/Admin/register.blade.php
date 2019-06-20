<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register Account</title>

  <link rel="icon" href="../img/favicon.png" type="image/png" sizes="16x16">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

</head>
<div id="app">
        @include('Admin.flash-message')
        

        @yield('content')
    </div>
<body class="bg-gradient-primary">

  <div class="container">

    <!-- <div class="card o-hidden border-0 shadow-lg my-5"> -->
    <div class=" o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row justify-content-center">
          <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
          <!-- <div class="col-lg-6"> -->
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>

              <form action='insert' class="user" method="POST">
                {{ csrf_field() }}
               <!--<div class="form-group">
                <div class="text-center">
                  <img src="/img/{{ Session:: get('path') }}" width="300" class="avatar img-circle" alt="avatar" name="image">
                  <h6>Upload a different photo...</h6>
                  <input type="file" class="form-control">
                  <br>
                </div>
              </div> -->

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="first_name" placeholder="First Name" name="first_name" value="{{ old('first_name') }}">
                  </div>

                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="last_name" placeholder="Last Name" name="last_name" value="{{ old('last_name') }}">
                  </div>
                </div>


                <div class="form-group row">
                  <div class="col-sm-6">
                    <label for="input-type">Gender:</label>
                    <div id="input-type" class="row">
                      <div class="col-sm-6">
                        <label class="radio-inline">
                          <input name="gender" id="gender" value="Male" type="radio" />  Male
                        </label>
                      </div>
                      <div class="col-sm-6">
                        <label class="radio-inline">
                          <input name="gender" id="gender" value="Female" type="radio" />  Female
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <label for="input-type">Type:</label>
                    <div id="input-type" class="row">
                      <div class="col-sm-6">
                        <label class="radio-inline">
                          <input name="usertype" id="usertype" value="service engineer" type="radio" checked />  Service Engineer
                        </label>
                      </div>
                      <div class="col-sm-6">
                        <label class="radio-inline">
                          <input name="usertype" id="usertype" value="Administrator" type="radio" type="radio" />  Admin
                        </label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <input type="tel" class="form-control form-control-user" id="contactnumber" data-plugin-maxlength maxlength="11" data-plugin-masked-input data-input-mask="09999999999" placeholder="Mobile No." name="mobile" value="{{ old('mobile') }}">
                </div>


                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" name="email" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    <div class="input-group">
                      <input type="date" data-plugin-datepicker id="inputDate" class="form-control form-control-user" placeholder="Birthday" name="birthday" value="{{ old('birthday') }}">
                    </div>
                  </div>

                  <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control form-control-user" id="username" placeholder="Username" name="username" value="{{ old('username') }}">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password_confirmation" placeholder="Repeat Password" name="password_confirmation">
                  </div>
                </div>
                <input type ="submit" class="btn btn-primary btn-user btn-block" value ="Register Account">   
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href='/'>Already have an account? Login!</a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
