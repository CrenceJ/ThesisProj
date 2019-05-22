<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>


  <link rel="icon" href="../img/favicon.png" type="image/png" sizes="16x16">

  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
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
          <li class="active"><a href='index'><i class="fa fa-bullseye"></i> Dashboard</a></li>
          <li><a href='posts'><i class="fa fa-tasks"></i> Inventory</a></li>
          <li><a href='salesRecord'><i class="fa fa-globe"></i> Sales Records</a></li>
          <li><a href='replacement'><i class="fa fa-list-ul"></i> Replacement Forms</a></li>
          <li><a href='settings'><i class="fa fa-list-ul"></i> Settings</a></li>
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

    @include('Admin.includes.user_info')
    <div id="page-wrapper">
        <br>

    </div>

    <div class="row">
      <div class="col-md-6 col-lg-12 col-xl-6">
        <section class="panel">
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-8">
                        @include('Admin.flash-message')


        @yield('content')

                <div class="chart-data-selector" id="salesSelectorWrapper">
                  <strong><h2>POST AN ANNOUCEMENT</h2></strong>
                  <br>

                  <form action='announcement_admin' method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                      <input name= "subject" type="subject" class="form-control" id="exampleFormControlInput1" placeholder="Subject">
                    </div>
                    <div class="form-group">
                      <textarea name= "content" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Content"></textarea>
                    </div>
                  <div class="text-right">
                  <input type="submit" class="btn btn-primary" value="Post">
                  </div>
                  </form>
                </div>
              </div>
            </section>
          </div>

          <div class="container-fluid">
            <div class="col-md-12 col-lg-6 col-xl-6">
              <section class="panel panel-featured-left panel-featured-secondary">
                <div class="panel-body">
                  <div class="widget-summary">
                    <div class="widget-summary-col widget-summary-col-icon">
                      <div class="summary-icon bg-secondary">
                        <i class="fa fa-usd"></i>
                      </div>
                    </div>
                    <div class="widget-summary-col">
                      <div class="summary">
                        <h4 class="title">Total Sales</h4>
                        <div class="info">
                          <strong class="amount">{{$allSalesCount}}</strong>
                        </div>
                      </div>
                      <div class="summary-footer">
                        <a class="text-muted text-uppercase" href='salesRecord'>Sales list</a>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-6">
              <section class="panel panel-featured-left panel-featured-tertiary">
                <div class="panel-body">
                  <div class="widget-summary">
                    <div class="widget-summary-col widget-summary-col-icon">
                      <div class="summary-icon bg-tertiary">
                        <i class="fa fa-shopping-cart"></i>
                      </div>
                    </div>
                    <div class="widget-summary-col">
                      <div class="summary">
                        <h4 class="title">Total Inventory</h4>
                        <div class="info">
                          <strong class="amount">{{$inventoriesCount}}</strong>
                        </div>
                      </div>
                      <div class="summary-footer">
                        <a  class="text-muted text-uppercase" href='inventory_admin'>View All</a>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-6">
              <section class="panel panel-featured-left panel-featured-primary">
                <div class="panel-body">
                  <div class="widget-summary">
                    <div class="widget-summary-col widget-summary-col-icon">
                      <div class="summary-icon bg-primary">
                        <i class="fa fa-life-ring"></i>
                      </div>
                    </div>
                    <div class="widget-summary-col">
                      <div class="summary">
                        <h4 class="title">Total Services</h4>
                        <div class="info">
                          <strong class="amount">{{$allServiceCount}}</strong>
                        </div>
                      </div>
                      <div class="summary-footer">
                        <a class="text-muted text-uppercase"></a>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-6">
              <section class="panel panel-featured-left panel-featured-quartenary">
                <div class="panel-body">
                  <div class="widget-summary">
                    <div class="widget-summary-col widget-summary-col-icon">
                      <div class="summary-icon bg-quartenary">
                        <i class="fa fa-user"></i>
                      </div>
                    </div>
                    <div class="widget-summary-col">
                      <div class="summary">
                        <h4 class="title">Customers</h4>
                        <div class="info">
                          <strong class="amount">{{$CustomerCount}}</strong>
                        </div>
                      </div>
                      <div class="summary-footer">
                        <a class="text-muted text-uppercase"></a>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
        <!-- /#wrapper -->

        <!-- Vendor -->
        <script src="assets/vendor/jquery/jquery.js"></script>
        <script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
        <script src="assets/vendor/nanoscroller/nanoscroller.js"></script>

        <!-- Specific Page Vendor -->
        <script src="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
        <script src="assets/vendor/flot/jquery.flot.js"></script>
        <script src="assets/vendor/flot/jquery.flot.categories.js"></script>
        <script src="assets/vendor/snap-svg/snap.svg.js"></script>
        <script src="assets/vendor/liquid-meter/liquid.meter.js"></script>

        <!-- Theme Base, Components and Settings -->
        <script src="assets/javascripts/theme.js"></script>


        <!-- Examples -->
        <script src="assets/javascripts/dashboard/examples.dashboard.js"></script>
      </div>
    </body>
    </html>
