<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Build A PC</title>


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

  <!-- Time and Date -->
  <script type="text/javascript" src="js/date_time.js"></script>

</head>
  <body>

    <div id="wrapper">
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">

          <a class="navbar-brand" href='/service_engineer'>Home</a>
          <a class="navbar-brand">
            <span id="date_time"></span>
            <script type="text/javascript">window.onload = date_time('date_time');</script>
          </a>
          @include('Admin.includes.nav')
        </div>

        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li><a href="/service_engineer"><i class="fa fa-bullseye"></i> Dashboard</a></li>
            <li><a href='myservices'><i class="fa fa-tasks"></i> Services</a></li>
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
            <li class="active"><a href='purchase-parts'><i class="fa fa-list-ul"></i> Build A PC</a></li>
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
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ $currentUser['name'] }}</a>
              <ul class="dropdown-menu">
                <li><a href='logout'><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>

      <br>
      <br>
      <br>

    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <br>
      <br>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 text-center">
            <a href="/customize?order_type=pc"><button type="buttonMy" class="btn btn-outline-primary .navbar-center" style="width:300px;height:80px;"><img src="img/mainboard.png"><br>Build PC</button></a>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Main Content -->

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

  </body>
</html>
