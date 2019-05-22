<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Canon</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <script type="text/javascript" src="js/date_time.js"></script>

  <!--forms-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>

    <link rel="stylesheet" href="css/style.css">




</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Welcome!</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
       

      @include('client_module.includes.nav')

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        
      </div>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
       <span id="date_time"></span>
            <script type="text/javascript">window.onload = date_time('date_time');</script>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            

            

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Ed Caluag</span>
                <img class="img-profile rounded-circle" src="img/anonymous.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="Profile.html">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="Activity-log.html">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="container text-right">
          <a href="addservices.html"><button type="button" class="btn btn-primary d-inline">&laquo; Back</button></a>
        </div>
        <br>
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"></h1>
          <!--beginnning of Forms-->
          <div class="card">
          	<h5 class="card-header">Canon</h5>
          	<div class="card-body-forOthers">


          		<div class="form-row">
          			<div class="form-group col-md-6">
          				<label for="inputState">Date</label>
          				<div class="input-group">
          					<input type="date" data-plugin-datepicker class="form-control">
          				</div>
          			</div>
          		</div>


                <div class="form-row">
                	<div class="form-group col-md-6">
                		<label for="inputState">First Name</label>
                		<div class="input-group">
                			<input type="firstname" class="form-control" id="inputFirstname" placeholder="First name">
                		</div>
                	</div>

                	<div class="form-group col-md-6">
                		<label for="inputState">Last Name</label>
                		<div class="input-group">
                			<input type="lastname" class="form-control" id="inputLastname" placeholder="Last name">
                		</div>
                	</div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="inputState">Address</label>
                    <div class="input-group">
                      <input type="Address" class="form-control" id="inputAddress" placeholder="123 Main St.">
                    </div>
                  </div>
                </div>

                <div class='form-row'>
                	<div class='form-group col-md-6'>
                		<label class='col-form-label' for='venue_city'>Barangay</label>
                		<input class='form-control' id='venue_city' name='locality' type='text'>
                	</div>
                	<div class='form-group col-md-4'>
                		<label class='col-form-label' for='venue_state'>Municipality</label>
                		<input class='form-control' id='venue_state' name='administrative_area_level_1' type='text'>
                	</div>
                	<div class='form-group col-md-2'>
                		<label class='col-form-label' for='venue_zip'>City</label>
                		<input class='form-control' id='venue_zip' name='postal_code' type='text'>
                	</div>

            <!--before a row-->
            <div class="form-group col-md-4">
            	<label for="inputState">Model</label>
            	<div class="input-group">
            		<input id="email"  placeholder="jdoe@gmail.com" class="form-control">
            	</div>
            </div>


            <div class="form-group col-md-4">
            	<label for="inputState">Serial Number</label>
            	<div class="input-group">
            		<input id="email"  placeholder="jdoe@gmail.com" class="form-control">
            	</div>
            </div>

            <!--after a row-->

            <div class="form-group col-md-4">
            	<label for="inputState">Email</label>
            	<div class="input-group">
            		<input id="email"  placeholder="jdoe@gmail.com" class="form-control">
            	</div>
            </div>
            

            <div class="form-group col-md-4">
            	<label for="inputState">Phone</label>
            	<div class="input-group">
            		<input id="phone" data-plugin-maxlength maxlength="11" data-plugin-masked-input data-input-mask="09999999999" placeholder="09532454000" class="form-control">
            	</div>
            </div>

            <div class="form-group col-md-4">
            	<label for="inputState">Landline</label>
            	<div class="input-group">
            		<input id="phone" data-plugin-maxlength maxlength="7" data-plugin-masked-input data-input-mask="0751531" placeholder="0751531" class="form-control">
            	</div>
            </div>


            <div class="form-group col-md-4">
            	<label for="inputState">Accessories</label>
            	<div class="input-group">
            		<input id="accessories" placeholder="charger" class="form-control">
            	</div>
            </div>

            <div class="form-group col-md-4">
            	<label for="inputState">Recieved by</label>
            	<div class="input-group">
            		<input id="accessories" placeholder="Mary Co" class="form-control">
            	</div>
            </div>

            <div class="form-group col-md-4">
            	<label for="inputState">Service Engineer in-charge</label>
            	<div class="input-group">
            		<input id="accessories" placeholder="Chrisss" class="form-control">
            	</div>
            </div>
        </div>

        <div class="text-right">
        	<a href="#" class="btn btn-success btn-icon-split">
        		<span class="icon text-white-50">
        			<i class="fas fa-check"></i>
        		</span>
        		<span class="text">Submit</span>
        	</a>
        </div>
        <br>
    </div>
</div>
            

            <!--end of forms-->
            
          </div>
        </div>
      </div>
    </div>




















        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Hexacom Enterprise 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
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

  <!--forms bootstrap-->

  <script src='http://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places'></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/geocomplete/1.7.0/jquery.geocomplete.min.js'></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js'></script>

  

  <script  src="js/index.js"></script>


</body>

</html>
