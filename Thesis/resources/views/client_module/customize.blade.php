
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Build PC</title>

  <link rel="icon" href="../img/favicon.png" type="image/png" sizes="16x16">

  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="css/local.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" href="css/theme.css" />

  <!-- Specific Page Vendor CSS -->
  <link rel="stylesheet" href="assets/vendor/select2/select2.css" />
  <link rel="stylesheet" href="assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />
  <!-- Theme CSS -->
  <link rel="stylesheet" href="assets/stylesheets/theme.css" />
  <!-- Skin CSS -->
  <link rel="stylesheet" href="assets/stylesheets/skins/default.css" />
  <!-- Head Libs -->
  <script src="assets/vendor/modernizr/modernizr.js"></script>

  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

  <!-- you need to include the shieldui css and js assets in order for the charts to work -->
  <link rel="stylesheet" type="text/css" href="https://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
  <script type="text/javascript" src="https://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
  <script type="text/javascript" src="https://www.prepbootstrap.com/Content/js/gridData.js"></script>

  <!-- Vendor -->
  <script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
  <!-- Specific Page Vendor -->
  <script src="assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
  <script src="assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
  <!-- Theme Base, Components and Settings -->
  <script src="assets/javascripts/theme.js"></script>
  <!-- Theme Custom -->
  <script src="assets/javascripts/theme.custom.js"></script>
  <!-- Theme Initialization Files -->



  <!-- Examples -->
  <script src="assets/javascripts/tables/examples.datatables.default.js"></script>
  <script src="assets/javascripts/tables/examples.datatables.row.with.details.js"></script>
  <script src="assets/javascripts/tables/examples.datatables.tabletools.js"></script>

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
        @include('Admin.includes.nav')
      </div>



      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
          <li><a href="/service_engineer"><i class="fa fa-bullseye"></i> Dashboard</a></li>
          <li><a href='services'><i class="fa fa-tasks"></i> Services</a></li>
          <li><a href='sales'><i class="fa fa-globe"></i> Sales</a></li>
          <li><a href='inventory'><i class="fa fa-list-ul"></i> Inventory</a></li>
          <li class="nav-item">
            <a class="nav-link collapse fa fa-list-ul" href="#" data-toggle="collapse" data-target="#collapseOrders" aria-expanded="true" aria-controls="collapseOrders">
              <i class=""></i>
              <span>Orders</span>
            </a>
            <div id="collapseOrders" class="collapse" aria-labelledby="headingOrders" data-parent="#accordionSidebar">
              <div>
                <div class="active"><a class="collapse-item btn" href='/orders'>System Orders</a></div>
                <div><a class="collapse-item btn" href='/ordersreq'>Requested Orders</a></div>
              </div>
            </div>
          </li>


          <li class="active"><a href='purchase-parts'><i class="fa fa-list-ul"></i> Purchase Parts</a></li>

          <li class="nav-item">
            <a class="nav-link collapsed fa fa-list-ul" href="#" data-toggle="collapse" data-target="#collapseNotifications" aria-expanded="true" aria-controls="collapseNotifications">
              <i class=""></i>
              <span>Notifications</span><span style="color:#ff6666;"> ({{$currentUser['notif']}})</span>
            </a>
            <div id="collapseNotifications" class="collapse" aria-labelledby="headingNotifications" data-parent="#accordionSidebar">
              <div>
                <div><a class="collapse-item btn" href='/notifications'>Claimed</a></div>
                <div><a class="collapse-item btn" href='/announcement'>Announcements</a></div>
              </div>
            </div>
          </li>

          <li><a href='reports'><i class="fa fa-list-ul"></i> Reports</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right navbar-user">
          <li class="dropdown messages-dropdown">
            <!-- for drop down purposes-->
            <ul class="dropdown-menu">
              <li class="message-preview">
                <a href="#">
                  <span class="avatar"><i class="fa fa-bell"></i></span>
                  <span class="message">Security alert</span>
                </a>
              </li>



              <li class="divider"></li>
              <li class="message-preview">
                <a href="#">
                  <span class="avatar"><i class="fa fa-bell"></i></span>
                  <span class="message">Security alert</span>
                </a>
              </li>



              <li class="divider"></li>
              <li><a href="#">Go to Inbox <span class="badge">2</span></a></li>
            </ul>
          </li>


          <li class="dropdown user-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ $currentUser['name'] }}</a>
            <ul class="dropdown-menu">
              <li><a href='logout'><i class="fa fa-power-off"></i> Log Out</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Dashboard of home pane-->
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
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="Profile.html">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="activity-log.html">
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

        <div class="container-fluid text-right">
          <a href='purchase-parts'><button type="button" class="btn btn-primary d-inline">&laquo; Back</button></a>
        </div>
        <br>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="card">

            <div class="card-body-forCustomize"> 

              <div class="form-row">
                <div class="col-lg-5">
                  <form role="form">
                    <div class="form-group">
                      <label><strong>OR Number</strong></label>
                      <input class="form-control">
                    </div>
                  </form>
                </div>
              </div>

              <div class="form-row">
                <div class="col-lg-5">
                  <form role="form">
                    <div class="form-group">
                      <label><strong>First Name</strong></label>
                      <input type="text" name="fname" class="form-control" id="inputFirstname" placeholder="First name" required>
                    </div>
                  </form>
                </div>
              </div>
              <br>
              <br>

              <div class="form-row">
                <div class="col-lg-5">
                  <form role="form">
                    <div class="form-group">
                      <label><strong>Last Name</strong></label>
                      <input type="text" name="lname" class="form-control" id="inputLastname" placeholder="Last name" required>
                    </div>
                  </form>
                </div>
              </div>

              <div class="form-row">
                <div class="col-lg-5">
                  <form role="form">
                    <div class="form-group">
                      <label><strong>Phone</strong></label>
                      <input name="contact" type="number" id="phone" data-plugin-maxlength maxlength="11"  placeholder="09532454000" class="form-control">
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <br>
            <br>
            <br>

              <div class="col-lg-12">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title">CHOOSE YOUR CORE COMPONENTS</h3>
                  </div>
                  <div class="panel-body">
                    <div class="form-group col-md-12">
                      <label for="inputState"><strong>Processor (CPU)</strong></label>
                      <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option selected>Choose...</option>
                      </select>
                    </div>

                    <div class="form-group col-md-12">
                      <label for="inputState"><strong>Motherboard</strong></label>
                      <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                      </select>
                    </div>

                    <div class="form-group col-md-12">
                      <label for="inputState"><strong>Memory (RAM)</strong></label>
                      <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                      </select>
                    </div>

                    <div class="form-group col-md-12">
                      <label for="inputState"><strong>Graphics/ Video Card</strong></label>
                      <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>

              <br>

              <div class="col-lg-12">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title">CHOOSE YOUR OPERATING SYSTEM AND SOFTWARE</h3>
                  </div>
                  <div class="panel-body">
                    <div class="form-group col-md-12">
                      <label for="inputState"><strong>Operating System</strong></label>
                      <select id="inputState" class="form-control">   
                        <option selected>Choose...</option>
                      </select>
                    </div>

                    <div class="form-group col-md-12">
                      <label for="inputState"><strong>Office Software</strong></label>
                      <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-lg-12">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title">POWER AND COOLING</h3>
                  </div>
                  <div class="panel-body">
                    <div class="form-group col-md-12">
                      <label for="inputState"><strong>Power Supply</strong></label>
                      <select id="inputState" class="form-control">
                        <option selected>None</option>
                        <option selected>Choose...</option>
                      </select>
                    </div>

                    <div class="form-group col-md-12">
                      <label for="inputState"><strong>Processor Cooling</strong></label>
                      <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                      </select>
                    </div>

                    <div class="form-group col-md-12">
                      <label for="inputState"><strong>Extra Case Fan</strong></label>
                      <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>

             
              <div class="col-lg-12">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title">PERIPHERALS & ACCESSORIES</h3>
                  </div>
                  <div class="panel-body">
                    <div class="form-group col-md-12">
                      <label for="inputState"><strong>Monitor</strong></label>
                      <select id="inputState" class="form-control">
                        <option selected>None</option>
                        <option selected>Choose...</option>
                      </select>
                    </div>

                    <div class="form-group col-md-12">
                      <label for="inputState"><strong>Mouse</strong></label>
                      <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                      </select>
                    </div>

                    <div class="form-group col-md-12">
                      <label for="inputState"><strong>Keyboard</strong></label>
                      <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                      </select>
                    </div>

                    <div class="form-group col-md-12">
                      <label for="inputState"><strong>Headsets</strong></label>
                      <select id="inputState" class="form-control">
                        <option selected>None</option>
                        <option selected>Choose...</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <br>
              <br>
              <div class="text-right">
                <button href="summaryreport.html" class="btn btn-primary">View Summary</button>
                <button href="#" type="button" class="btn btn-primary">Save a Copy</button>
              <br><br>
            </div>
          </div>
        </body>
        </html>
