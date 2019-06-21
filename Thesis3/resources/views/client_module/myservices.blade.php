
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="author" content="">
  <title>Services</title>

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
   @include('client_module.includes.service_modals')
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
          <li class="active"><a href='myservices'><i class="fa fa-tasks"></i> Services</a></li>
          <li><a href='sales'><i class="fa fa-globe"></i> Sales</a></li>
          <li><a href='inventory'><i class="fa fa-list-ul"></i> Inventory</a></li>
          <li class="nav-item">
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


        <!-- End of Topbar -->
        <div class="container text-right">
          <a href="/services"><button type="button" class="btn btn-primary d-inline">&laquo; Back</button></a>
        </div>
        <br>


        <!-- Begin Page Content -->
        <div class="container-fluid">



          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">My Services</h6>
              <span style="font-size: 13px; color: red"> *Details of service is available upon clicking SRF Number </span>
            </div>
            <div class="card-body">
              <div class="table-responsive">

                <div class="panel-body">

      <div class="row">
        <div class="col-sm-6">
          <div class="mb-md">
            <a class="btn btn-primary" href="{{ url('serviceform?type=input') }}">Add Services <i class="fa fa-plus"></i></a>
          </div>
        </div>
      </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                     <tr>
                      <th>SRF #</th>
                      <th>Name</th>
                      <th>Brand Name</th>
                      <th>Model</th>
                      <th>Status</th>
                      <th>Service Fee</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($myServices as $service)
                    <tr>
                      <td><a href="#" data-toggle="modal" data-target="#service-details{{$service->srf_no}}" class="m-0 font-weight-bold text-primary">{{$service->srf_no}}</a></td>
                        <td>{{$service->client->first_name}} {{$service->client->last_name}}</td>
                        <td>{{$service->brand ? $service->brand : 'N/A'}}</td>
                        <td>{{$service->repair_model ? $service->repair_model : 'N/A'}}</td>
                        <td>{{$service->status}}</td>
                        <td>{{$service->service_cost}}</td>
                        <td class="actions">
                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#srf{{$service->srf_no}}"> Update Status </button>
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#items-srf{{$service->srf_no}}"> Order Parts </button>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


      <!-- basic modal for warranty items-->
      @foreach($myServices as $service2)
      <div class="modal fade" id="service-details{{$service2->srf_no}}" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="m-0 font-weight-bold text-primary" id="myModalLabel">Summary of the Service</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div id="page-wrapper">

              <h4>Service Information</h4>

              <!-- Specifying an 'open' attribute will make all the content visible when the page loads -->
              <!--<details> -->

                <table>
                  <tr>
                    <th scope="row">Entry Date</th>
                    <td>{{$service2->created_at}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Fullname</th>
                    <td>{{$service2->client->first_name}} {{$service2->client->last_name}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Contact #</th>
                    <td>{{$service2->client->contact_no}}</td>
                  </tr>
                  <br>
                  <tr>
                    <th scope="row">SRF #</th>
                    <td>{{$service2->srf_no}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Case ID #</th>
                    <td>{{$service2->case_id}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Serial Number</th>
                    <td>{{$service2->serial}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Problem Description</th>
                    <td>{{$service2->description}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Warranty</th>
                    <td>{{$service2->warranty}}</td>
                  </tr>
                  <br>
                  <tr>
                    <th scope="row">Unit password</th>
                    <td>{{$service2->unit_password ? $service2->unit_password : 'N/A'}}</td>
                  </tr>
                  <tr>
                    <tr>
                    <th scope="row">Accessories</th>
                    <td>{{$service2->accessories}}</td>
                  </tr>
                  <tr>

                    <th scope="row">Repair Parts</th>
                    <td><span id="items-cost-container{{$service2->client->client_id}}"><button class="btn btn-primary" onclick="itemCost({{ $service2->client->client_id }})"> View Items and Cost  </span></button></td>
                  </tr>

                </table>
              </details>

            </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      @endforeach

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
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
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="/js/demo/datatables-demo.js"></script>
</body>

<script>


  // document.getElementById('additem').onclick = function() {
  // alert("pota");
  // var appendThis = document.getElementById('append');
  // document.getElementById('iteminventorybody').append(appendThis);
  // }
  function additems(id) {
    $('#append' + id).clone().appendTo('#iteminventorybody' + id);
  }

  function deleteitems(id) {
    $('#append' + id).remove();
  }

</script>

<script>

  function itemCost(id)
  {

        $.ajax({
        url     : '/itemsCostAjax',
        type  : 'post',
        data    : {
            client_id  : id,
        },
        headers:
        {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success : function(data){
          // console.log(data);
          var html = "";
          var length = data['inventory'].length;

          for(var x=0; x < length; x++ ){
            html += data['inventory'][x] + '<br>';
          }

          html += '<span style="color: red"> Total Cost: ' + data['cost'] + "</span><br>" +
                    "<a href='/orders' class='btn btn-primary' > Go to orders </a>";

        document.getElementById('items-cost-container'+id).innerHTML = html;
        }
    });

  }

</script>
@if(session('good'))

<script> alert('Note: Item unpaid, please proceed to orders'); </script>

@endif
</html>
