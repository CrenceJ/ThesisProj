
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventory</title>

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
          <li class="active"><a href='posts'><i class="fa fa-tasks"></i> Inventory</a></li>
          <li class>
              <a class="nav-link collapse" href="#" data-toggle="collapse" data-target="#collapseOrders" aria-expanded="true" aria-controls="collapseOrders">
                  <i class="fa fa-globe"></i>
                  <span>Sales Records</span>
              </a>
              <div id="collapseOrders" class="collapse" aria-labelledby="headingOrders" data-parent="#accordionSidebar">
                  <div>
                      <div><a class="collapse-item btn" href='/chargeInv'>Charge Invoice</a></div>
                      <div><a class="collapse-item btn" href='/ordersreq'>Cash Invoice</a></div>
                  </div>
              </div>
          </li>
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
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ $currentUser['name'] }}</a>
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

                   <!-- DIV
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      -->
                      <!-- Start of new table -->

                      <div class="row">
                        <div class="col-xs-12">
                          <section class="panel">
                            <header class="panel-heading">

                              <h3>Add A Product</h3>

                            </header>
                            <div class="panel-body">

                              <!--start of forms-->


                              <form autocomplete="off" class="form-horizontal form-bordered" action='inventoryForm' method="POST">
                                <div id="app">


                                  @include('Admin.flash-message')


                                  @yield('content')
                                </div>

                                {{ csrf_field() }}

                                <div class="form-group">
                                  <label class="col-md-3 control-label" for="inputDefault">Item</label>
                                  <div class="col-md-3">
                                    <input name="item" type="text" class="form-control" id="inputDefault" value="{{ old('item') }}">
                                  </div>
                                </div>

                                <!--end of the div-->
                                <!--start of forms-->

                                <div class="form-group">
                                  <label  class="col-md-3 control-label" for="inputDefault">Brand</label>
                                  <div class="col-md-3">
                                    <input name="brand" type="text" class="form-control" id="inputDefault" value="{{ old('brand') }}">
                                  </div>
                                </div>
                                <!--ending & start-->
                                <div class="form-group">
                                  <label class="col-md-3 control-label" for="inputDefault">Model</label>
                                  <div class="col-md-3">
                                    <input name="model" type="text" class="form-control" id="inputDefault" value="{{ old('model') }}">
                                  </div>
                                </div>
                                <!--ending & start-->

                                <div class="form-group">
                                  <label class="col-md-3 control-label" for="inputDefault">Processor Socket</label>
                                  <div class="col-md-3">
                                    <input name="psocket" type="text" class="form-control" id="inputDefault" value="{{ old('psocket') }}">
                                  </div>
                                </div>

                                <!--ending & start-->

                                <div class="form-group">
                                  <label class="col-md-3 control-label" for="inputDefault">Socket Type</label>
                                  <div class="col-md-3">
                                    <input name="socket" type="text" class="form-control" id="inputDefault" value="{{ old('socket') }}">
                                  </div>
                                </div>

                                <!--ending & start-->
                                <div class="form-group">
                                  <label  class="col-md-3 control-label" for="inputDefault">Cost (₱)</label>
                                  <div class="col-md-3">
                                    <input name="cost" type="text" class="form-control" id="inputDefault" value="{{ old('cost') }}">
                                  </div>
                                </div>
                                <!--ending & start-->
                                <div class="form-group">
                                  <label class="col-md-3 control-label" for="inputDefault">Supplier's Name</label>
                                  <div class="col-md-3">
                                    <select value="{{old('supplierName')}}" name ="supplierName" id="inputState" class="form-control">
                                      <option value="{{old('supplierName')}}">{{old('supplierName')}}</option>
                                      @foreach($suppliers as $invent)
                                      
                                      <option value="{{$invent->supplier_name}}">{{$invent->supplier_name}}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                </div>
                              <!--ending & start-->
                              <div class="form-group">
                                <label class="col-md-3 control-label" for="inputDefault">Recieved Date</label>
                                <div class="col-md-3">
                                  <input type="date" data-plugin-datepicker id="inputDate" class="form-control form-control-user" placeholder="Recieved" name="date" value="{{ old('date') }}">
                                </div>
                              </div>
                              <!--ending & start-->
                              <div class="form-group">
                                <label class="col-md-3 control-label" for="inputDefault">Serial Number</label>
                                <div class="col-md-3">
                                  <input name="inventory_serial_no" type="text" class="form-control" id="inputDefault">
                                </div>
                              </div>


                              <div class="text-right">
                                <input type ="submit" class="btn btn-primary btn-user" value ="Add">
                                <a href='inventoryForm' class="btn btn-warning">New</a>
                                <a href='posts' class="btn btn-success btn-user ">Done</a>
                              </div>



                              <!--ending & start-->
                            </form>

                          </div>

                        </div>


                      </div>
                    </section>

                  </div>
                </div>


                <a class="btn btn-primary" href="successpage'> Submit </a>



                <!-- End of table-->
              </div>
            </div>
            <!-- /#wrapper -->



          </body>
          </html>
