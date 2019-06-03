
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an Account</title>

    <link rel="icon" href="../img/favicon.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="js/date_time.js"></script>

</head>
<body>
  <div id="wrapper">
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href='index'>Home</a>
              <a class="navbar-brand">
              <span id="date_time"></span>
          <script type="text/javascript">window.onload = date_time('date_time');</script>
               </a>
          </div>
          <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav side-nav">
                <li><a href='index'><i class="fa fa-bullseye"></i> Dashboard</a></li>
                <li><a href='posts'><i class="fa fa-tasks"></i> Inventory</a></li>
                <li><a href='salesRecord'><i class="fa fa-globe"></i> Sales Records</a></li>
                <li><a href='replacement'><i class="fa fa-list-ul"></i> Replacement Forms</a></li>
                <li class="active"><a href='settings'><i class="fa fa-list-ul"></i> Settings</a></li>

              </ul>
              <ul class="nav navbar-nav navbar-right navbar-user">

                   <li class="dropdown user-dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{$currentUser['name']}}<b class="caret"></b></a>
                      <ul class="dropdown-menu">
                          <li><a href='logout'><i class="fa fa-power-off"></i> Log Out</a></li>
                      </ul>
                  </li>
              </ul>
          </div>
      </nav>

      <div id="page-wrapper">
          <div id="app">
        @include('Admin.flash-message')


        @yield('content')
    </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                <li class="active"><a href="#editprofile" data-toggle="tab">Create Account</a></li>


              <a href="settings" class="btn btn-primary" href='settings' style="float: right;">Back</a>
            </div>
          </div>
        </div><!-- /.row -->


        <div id="myTabContent" class="tab-content">
          <div class="tab-pane fade active in" id="editprofile">


            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <hr>

              <form action='insert' class="user" method="POST">
                {{ csrf_field() }}

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label>First Name</label><input type="text" class="form-control form-control-user" id="first_name" placeholder="Juan" name="first_name" value="{{ old('first_name') }}">
                  </div>

                  <div class="col-sm-6">
                    <label>Last Name</label><input type="text" class="form-control form-control-user" id="last_name" placeholder="Dela Cruz" name="last_name" value="{{ old('last_name') }}">
                  </div>
                </div>

                <br>

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

                <br>

                <!--  -->
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label>Mobile No.</label><input type="tel" class="form-control form-control-user" id="contactnumber" data-plugin-maxlength maxlength="11" data-plugin-masked-input data-input-mask="09999999999" placeholder="09123456789" name="mobile" value="{{ old('mobile') }}">
                  </div>

                  <div class="col-sm-6">
                    <label>Email Address</label><input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="name@email.com" name="email" value="{{ old('email') }}">
                  </div>
                </div>

                <br>

                <!--  -->
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label>Birthday:</label><input type="date" data-plugin-datepicker id="inputDate" class="form-control form-control-user" placeholder="Birthday" name="birthday" value="{{ old('birthday') }}">
                  </div>

                  <div class="col-sm-6">
                    <label>Username</label><input type="text" class="form-control form-control-user" id="username" placeholder="username" name="username" value="{{ old('username') }}">
                  </div>
                </div>

                <br>

                <!-- password -->
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label>Enter Password</label><input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">
                  </div>

                  <div class="col-sm-6">
                    <label>Repeat Password</label><input type="password" class="form-control form-control-user" id="password_confirmation" placeholder="Repeat Password" name="password_confirmation">
                  </div>
                </div>

                <br>

                <input type ="submit" class="btn btn-primary btn-user btn-block" value ="Register Account">   
              <hr>

            </div>
          </div>
        </div>
      </div>




        <!-- -->
        <!-- Modal -->
  </div> <!-- end tag of div wrapper, dont delete -->

</body>
</html>
