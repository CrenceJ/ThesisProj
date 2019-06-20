<!DOCTYPE html>
<html lang="en">

<head>
  <!-- for profile -->
  <link rel="stylesheet" href="vendor/bootstrap/css/4.3.1/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
  <!-- for password -->
  <link rel="stylesheet" href="vendor/bootstrap/css/4.0.0/bootstrap.min.css">
  <link rel="stylesheet" href="css/password.css">
  <script src="vendor/jquery/jquery-3.2.1.slim.min.js"></script>
  <script src="ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap-4.0.0-beta.min.js"></script>

  <script src="js/b9bdbd120a.js"></script>
  <script  src="js/password.js"></script>

</head>

<body>
  <div class="container text-right">
    <a href="profile.html"><button type="button" class="btn btn-primary d-inline">&laquo; Back</button></a>
  </div>

  <i class="glyphicon glyphicon-adjust"></i>
  <div class="container">
    <h1>Edit Profile</h1>
    <hr>
    <div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="https://img.icons8.com/color/100/000000/name.png" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          <input type="file" class="form-control">
          <br>
          <button type="button" class="btn btn-primary">Save</button> <button type="button" class="btn btn-primary">Cancel</button>
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <h3>Personal info</h3>
        
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">First name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" placeholder="Jane">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" placeholder="Bishop">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Birthday:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" placeholder="jdoe@gmail.com"disabled="">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-3 control-label">Username:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" placeholder="janeuser">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">Current Password</label>
            <div class="col-md-8">
              <div class="input-group" id="show_hide_password">
                <input class="form-control" type="password" placeholder= "&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;" size="8" required>
                <div class="input-group-addon">
                  <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">New Password
              <br>
              <small><em>must have atleast 8 characters</em></small>
            </label>

            <div class="col-md-8">
              <div class="input-group" id="show_hide_password">
                <input class="form-control" type="password" placeholder= "&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;" size="30" required>
                <div class="input-group-addon">
                  <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">Confirm Password
              <br>
              <small><em>must have atleast 8 characters</em></small>
            </label>
            <div class="col-md-8">
              <div class="input-group" id="show_hide_password">
                <input class="form-control" type="password" placeholder= "&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;" size="30" required>
                <div class="input-group-addon">
                  <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="button" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>
</body