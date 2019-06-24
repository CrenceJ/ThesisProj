
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Records</title>

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
          </div>
          <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav side-nav">
                <li><a href='index'><i class="fa fa-bullseye"></i> Dashboard</a></li>
                <li class="services"><a href='allServices'><i class="fa fa-wrench" aria-hidden="true"></i> Services</a></li>
                <li><a href='posts'><i class="fa fa-tasks"></i> Inventory</a></li>
                <li class="active"><a href='salesRecord'><i class="fa fa-globe"></i> Sales Records</a></li>
                <li><a href='replacement'><i class="fa fa-list-ul"></i> Replacement Forms</a></li>
          <li><a href='suppliers'><i class="fa fa-users"></i> Suppliers</a></li>
                <li><a href='settings'><i class="fa fa-cog" aria-hidden="true"></i></i> Settings</a></li>
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
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{$currentUser['name']}}</a>
            <ul class="dropdown-menu">
              <li><a href='logout'><i class="fa fa-power-off"></i> Log Out</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
        <!-- Dashboard of home pane-->
        <br>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1> <small></small></h1>
                   <!-- DIV
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    -->
                  <!-- Start of new table -->
<section class="panel">
  <div class="panel-body">

    <table class="table table-bordered table-striped mb-none" id="datatable-default">
      <thead>
        <tr>
          <th class="center hidden-phone">OR Number</th>
          <th class="center hidden-phone">SRF Number</th>
          <th>Service Engineer</th>
          <th class="center hidden-phone">Type of Sale</th>
          <th class="center hidden-phone">Cost</th>
          <th class="center hidden-phone">Date</th>
          <th class="center hidden-phone">Status</th>
        </tr>
      </thead>
      <tbody>
         @foreach($viewSales as $viewOnly)
        <tr class="gradeX">
          <td class="center hidden-phone">{{$viewOnly -> or_number}}</td>
          <td class="center hidden-phone">{{$viewOnly -> srf_no}}</td>
          <td>{{$viewOnly -> ServiceEngineer}}</td>
          <td class="center hidden-phone">{{$viewOnly -> order_type}}</td>
          <td class="center hidden-phone">{{$viewOnly -> cost}}</td>
          <td class="center hidden-phone">{{$viewOnly -> updated_at}}</td>
          <td class="center hidden-phone">{{$viewOnly -> order_status}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</section>



                  <!-- End of table-->
                    </div>
                </div>
            </div>
           <!-- /#wrapper -->



</body>
</html>
