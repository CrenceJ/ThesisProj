
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
          <li><a href="/service_engineer"><i class="fa fa-bullseye"></i> Dashboard</a></li>
          <li class="active"><a href='services'><i class="fa fa-tasks"></i> Services</a></li>
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


          <li><a href='purchase-parts'><i class="fa fa-list-ul"></i> Purchase Parts</a></li>

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
    <br>
    <br>
    <br>
    <!-- Dashboard of home pane-->
    <!-- Begin Page Content -->
    <!-- /.container-fluid -->
    <div class="panel-body">

        <table class="table table-bordered table-striped mb-none" id="datatable-default">
          <thead>
             <tr>
              <th style="text-align:center;">SRF Number</th>
              <th style="text-align:center;">Name</th>
              <th style="text-align:center;">Brand Name</th>
              <th style="text-align:center;">Model</th>
              <th style="text-align:center;">Status</th>
              <th style="text-align:center;">Service Fee</th>
              <th style="text-align:center;">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($myServices as $service)
            <tr>
              <td style="text-align:center;"><a href="#" data-toggle="modal" data-target="#service-details{{$service->srf_no}}" class="m-0 font-weight-bold text-primary">{{$service->srf_no}}</a></td>
                <td style="text-align:center;">{{$service->client->first_name}} {{$service->client->last_name}}</td>
                <td style="text-align:center;">{{$service->brand ? $service->brand : 'N/A'}}</td>
                <td style="text-align:center;">{{$service->repair_model ? $service->repair_model : 'N/A'}}</td>
                <td style="text-align:center;">{{$service->status}}</td>
                <td style="text-align:center;">{{$service->service_cost}}</td>
                <td class="actions" style="text-align:center;">
                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#srf{{$service->srf_no}}"> Update Status </button>
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#items-srf{{$service->srf_no}}"> Order Parts </button>
              </td>
            </tr>
            @endforeach
          </tbody>
      </table>
    </div>





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
  <!--<footer class="sticky-footer bg-white">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright &copy; Hexacom Enterprise 2019</span>
      </div>
    </div>
  </footer>-->
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
      <!-- End of Dashboard Div -->
    </div>
  </div>
</div>
<!-- /#wrapper -->
</div> <!-- end tag of div wrapper, dont delete -->
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
