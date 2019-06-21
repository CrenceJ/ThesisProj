
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Orders</title>

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
        <a class="navbar-brand" href='/service_engineer'>Home</a>
        <a class="navbar-brand">
          <span id="date_time"></span>
          <script type="text/javascript">window.onload = date_time('date_time');</script>
        </a>
      </div>
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
          <li><a href="/service_engineer"><i class="fa fa-bullseye"></i> Dashboard</a></li>
          <li><a href='myservices'><i class="fa fa-tasks"></i> Services</a></li>
          <li><a href='sales'><i class="fa fa-globe"></i> Sales</a></li>
          <li><a href='inventory'><i class="fa fa-list-ul"></i> Inventory</a></li>
          <li class="active" class="nav-item">
              <a class="nav-link collapse fa fa-list-ul" href="#" data-toggle="collapse" data-target="#collapseOrders" aria-expanded="true" aria-controls="collapseOrders">
                  <i class=""></i>
                  <span>Orders</span>
              </a>
              <div id="collapseOrders" class="collapse" aria-labelledby="headingOrders" data-parent="#accordionSidebar">
                  <div>
                      <div><a class="collapse-item btn" href='/orders'>System Orders</a></div>
                      <div><a class="collapse-item btn" href='/ordersreq'>Requested Orders</a></div>
                  </div>
              </div>
          </li>


          <li><a href='purchase-parts'><i class="fa fa-list-ul"></i> Build A PC</a></li>

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
    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
                   <!-- DIV
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      -->

                      <!-- TABLE LANG -->
          <br>
          <div id="page-wrapper">
            <div class="row">
              <div class="col-lg-12">

                             <!-- DIV
                              <div class="alert alert-success alert-dismissable">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                -->
                                <!-- Start of new table -->
                <section class="panel">
                  <header class="panel-heading">
              <!--
              <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
              </div>
            -->

                  </header>
                  <div class="panel-body">
                    <table class="table table-bordered table-striped mb-none" id="datatable-default">
                      <thead>
                         <tr>
                          <th style="text-align:center;">OR Number</th>
                          <th style="text-align:center;">Name</th>
                          <th style="text-align:center;">Client Contact Number</th>
                          <th style="text-align:center;">Type</th>
                          <th style="text-align:center;">Status</th>
                          <th style="text-align:center;">Order Date</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($orders as $order)
                        <tr>
                            <td><a href="#" data-toggle="modal" data-target="#order{{$order->order_id}} " class="m-0 font-weight-bold text-primary">{{$order->or_number}}</a></td>
                            <td>{{$order->clients['first_name']}} {{$order->clients['last_name']}}</td>
                            <td>{{$order->clients['contact_no']}} {{$order->clients['contact_no']}}</td>
                            <td>{{$order->order_type}}</td>
                            <td>{{$order->order_status}}</td>
                            <td>{{$order->created_at}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                   </table>
                 </div>
               </section>
      <!-- End of Dashboard Div -->
              </div>
            </div>
          </div>
<!-- /#wrapper -->
        </div> <!-- end tag of div wrapper, dont delete -->

        <!-- basic modal for warranty items-->
@foreach($orders as $order)
<form action='/payorder' method="POST">
<input hidden name="order_id" value="{{$order->order_id}}">
{{ csrf_field() }}
<div class="modal fade" id="order{{$order->order_id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Details of Order</h4>
      </div>
      <div class="modal-body">
      <table class="table">
      <tr>
         <th> Items </th>
         <th>&nbsp;   </th>
          <th> Cost </th>
      </tr>
      <?php $cost = 0; ?>
      @foreach($orderDetails as $det)
      @if($order->order_id == $det->order_id)
      <?php $cost += $det->cost; ?>
      <tr>
        <td>{{$det->inventory_item}}</td>
        <td> &nbsp;</td>
        <td> {{$det->cost}} </td>
      </tr>
      <input hidden name="inventory[]" value="{{$det->inventory_id}}">
      @endif
      @endforeach
        <th> total cost </th>
        <th> &nbsp; </th>
        <td> {{$cost}} </td>
      </tr>

    </table><br>
    @if($order->order_status == 'Unpaid')
    <span style="display:block; text-align: -webkit-center"><button type="submit" class="btn btn-success"> Mark As Paid </button></span>
    @endif
      </div>
  </div>
  </div>
</div>
</form>
@endforeach
</body>
</html>
