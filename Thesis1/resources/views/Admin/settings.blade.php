
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Settings</title>

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
          <li class="services"><a href='allServices'><i class="fa fa-wrench" aria-hidden="true"></i> Services</a></li>
          <li><a href='posts'><i class="fa fa-tasks"></i> Inventory</a></li>
          <li><a href='salesRecord'><i class="fa fa-globe"></i> Sales Records</a></li>
          <li><a href='replacement'><i class="fa fa-list-ul"></i> Replacement Forms</a></li>
          <li><a href='suppliers'><i class="fa fa-users"></i> Suppliers</a></li>
          <li class="active"><a href='settings'><i class="fa fa-cog" aria-hidden="true"></i></i> Settings</a></li>

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
            <li class="active"><a href="#editprofile" data-toggle="tab">Edit Profile</a></li>
            <li><a href="#manageaccounts" data-toggle="tab">Manage Accounts</a></li>
          </div>
        </div>
      </div><!-- /.row -->

      <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active in" id="editprofile">

          <!-- Profile Picture edit -->
          <div class="form-group">
            <h4 for="file">Profile Picture</h4>

            <span class="profile-picture"> 
              <img class="editable img-responsive" alt="Avatar" id="avatar2" src="../img/uploads/avatars/default.png">
            </span>

            <input type="file" name="avatar">
            <br>

            <input class="btn btn-primary" href='' type="submit" value="Save Changes">
          </div>

          <hr>

          <div>
            <div class="container-fluid">
              <h3>User Information</h3>
              <table class="table table-hover">
                <thead>
                  <tr>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Full Name</th>
                    <td>{{$currentUser['name']}}</td>
                    <td><a data-toggle="modal" data-target="#fullname">Edit</a></td>
                  </tr>
                  <tr>
                    <th>Username</th>
                    <td>{{$currentUser['uname']}}</td>
                    <td><a data-toggle="modal" data-target="#username">Edit</a></td>
                  </tr>
                  <tr>
                    <th>Contact Number</th>
                    <td>{{$currentUser['contact']}}</td>
                    <td><a data-toggle="modal" data-target="#contact">Edit</a></td>
                  </tr>
                  <tr>
                    <th>Email</th>
                    <td>{{$currentUser['email']}}</td>
                    <td><a data-toggle="modal" data-target="#email">Edit</a></td>
                  </tr>
                  <tr>
                    <th><a href="#" data-toggle="modal" data-target="#password">Change Password</a></th>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>


              <!-- Modal(First Name) -->
              <div class="modal fade" id="fullname" role="dialog">
                <div class="modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Edit Your Full Name</h4>
                    </div>
                    <div class="modal-body">
                      <form action='settings' method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                          <label for="formGroupExampleInput">First Name</label>
                          <input name ="fname" type="text" class="form-control" id="fname" value="{{$currentUser['fname']}}">
                        </div>
                        <div class="form-group">
                          <label for="formGroupExampleInput2">Last Name</label>
                          <input name ="lname" type="text" class="form-control" id="lname" value="{{$currentUser['lname']}}">
                        </div>
                        <div class="text-right">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <input type ="submit" class="btn btn-primary btn-user" value ="Save Changes">
                        </div>
                      </form>
                    </div>
                      <!--<div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Save Changes</button>
                      </div> -->
                    </div>
                  </div>
                </div>

                <!-- Modal(UserName) -->
                <div class="modal fade" id="username" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Edit Your Username</h4>
                      </div>
                      <div class="modal-body">
                        <form action='uname' method="POST">
                          {{csrf_field()}}
                          <div class="form-group">
                            <label for="uname">Username</label>
                            <input name ="uname" type="text" class="form-control" id="formGroupExampleInput" value="{{$currentUser['uname']}}">
                          </div>
                          <div class="text-right">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <input type ="submit" class="btn btn-primary btn-user" value ="Save Changes">
                          </div>
                        </form>
                      </div>
                      <!--<div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Save Changes</button>
                      </div>-->
                    </div>
                  </div>
                </div>

                <!-- Modal(Contact) -->
                <div class="modal fade" id="contact" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Edit Your Contact</h4>
                      </div>
                      <div class="modal-body">
                        <form action='contact' method="POST">
                          {{csrf_field()}}
                          <div class="form-group">
                            <label for="contact">Contact</label>
                            <input type="tel" class="form-control form-control-user" id="contact" data-plugin-maxlength maxlength="11" data-plugin-masked-input data-input-mask="09999999999" placeholder="09123456789" name="contact" value="{{$currentUser['contact']}}">
                          </div>
                          <div class="text-right">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <input type ="submit" class="btn btn-primary btn-user" value ="Save Changes">
                          </div>
                        </form>
                      </div>
                      <!--<div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Save Changes</button>
                      </div>-->
                    </div>
                  </div>
                </div>


                <!-- Modal(Email) -->
                <div class="modal fade" id="email" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Edit Your Contact</h4>
                      </div>
                      <div class="modal-body">
                        <form action='email' method="POST">
                          {{csrf_field()}}
                          <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="name@email.com" name="email" value="{{ $currentUser['email'] }}">
                          </div>
                          <div class="text-right">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <input type ="submit" class="btn btn-primary btn-user" value ="Save Changes">
                          </div>
                        </form>
                      </div>
                      <!--<div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Save Changes</button>
                      </div>-->
                    </div>
                  </div>
                </div>

                           <!-- Modal(password) -->
                <div class="modal fade" id="password" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Change Your Password</h4>
                      </div>
                      <div class="modal-body">
                        <form action='password' method="POST">
                          {{csrf_field()}}
                          <div class="form-group">
                            <label for="password">Old Password</label>
                            <input type="password" class="form-control form-control-user" id="password" placeholder="Old Password" name="oldpw">
                          </div>

                          <div class="form-group">
                            <label for="password">New Password</label>
                            <input type="password" class="form-control form-control-user" id="password" placeholder="New Password" name="newpw">
                          </div>

                          <div class="form-group">
                            <label for="password">Retype Password</label>
                            <input type="password" class="form-control form-control-user" id="password" placeholder="Re-Type Password" name="confnewpw">
                          </div>
                          <div class="text-right">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <input type ="submit" class="btn btn-primary btn-user" value ="Save Changes">
                          </div>
                        </form>
                      </div>
                      <!--<div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Save Changes</button>
                      </div>-->
                    </div>
                  </div>
                </div>



              </div>
            </div>
          </div>



          <div class="tab-pane fade" id="manageaccounts">
            <div class="panel-body">
              <div class="row">
                <div class="col-sm-6">
                  <div class="mb-md">
                    <a href='createaccount' class="btn btn-primary">Create Account <i class="fa fa-plus"></i></a>
                  </div>
                </div>
              </div>
              <br>
              <table class="table table-bordered table-striped mb-none" id="datatable-default">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Service Engineer</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Last login</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($posts as $post)
                  <tr class="gradeX">
                    <td>{{$post -> user_id}}</td>
                    <td>{{$post -> fullname}}</td>
                    <td>{{$post -> username}}</td>
                    <td>******</td>
                    <td>{{$post -> last_login}}</td>

                    <td class="actions">
                      <form action='disable' method="POST"> 
                        {{ csrf_field()}}
                        <input name="disable" value="Disabled" class="btn btn-danger btn-xs" type="submit">
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- end tag of div wrapper, dont delete -->

  </body>
  </html>
