<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Choose Parts Individually</title>

  <!-- Custom fonts for this template-->
  <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <script type="text/javascript" src="js/date_time.js"></script>

  <!--forms-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>

    <link rel="stylesheet" href="/css/style.css">




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
        <div class="sidebar-brand-text mx-3">Hi there! </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
 @include('client_module.includes.nav')

      <!-- Heading -->
      <div class="sidebar-heading">

      </div>

      <!-- Nav Item - Tables -->


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

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





            @include('client_module.includes.user_info')


          </ul>

        </nav>
        <!-- End of Topbar -->

        <div class="container text-right">
          <a href="/purchase-parts"><button type="button" class="btn btn-primary d-inline">&laquo; Back</button></a>
        </div>
        <br>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="card">

            <div class="card-body-forCustomize">


              <div class="form-row">
                  <div class="form-group col-md-5">
                    <label for="or">Order Number</label>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </span>
                      <input type="text" class="form-control" name="or_number" id="or" required>
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-5">
                    <label for="inputState">First Name</label>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="fa fa-user"></i>
                      </span>
                      <input type="text" name="fname" class="form-control" id="inputLastname" placeholder="Last name" required>
                    </div>
                  </div>

                  <div class="form-group col-md-5">
                    <label for="inputState">Last Name</label>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="fa fa-user"></i>
                      </span>
                      <input type="text" name="lname" class="form-control" id="inputLastname" placeholder="Last name" requred>
                    </div>
                  </div>
                </div>

                <!-- CONTACT NO -->
                <div class="form-row">
                  <div class="form-group col-md-5">
                    <label for="inputState">Phone</label>
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-phone"></i>
                        </span>
                        <input id="phone" name="phone" data-plugin-maxlength maxlength="11" data-plugin-masked-input data-input-mask="09999999999" placeholder="09532454000" class="form-control" required>
                      </div>
                  </div>
                </div>
                <br>


              <!-- Page Heading -->
              <div class="card">
                <h5 class="card-header">CHOOSE YOUR CORE COMPONENTS</h5>
                <div class="card-body">
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label for="inputState"><strong>Processor (CPU)</strong></label>
                      <select id="inputState" name="cpu[]" class="form-control">
                        <option selected>Choose...</option>
                        @foreach($inventories['CPU'] as $cpu)
                          <option value="{{$cpu->inventory_id}}->{{$cpu->inventory_item}}~~{{$cpu->cost}}"> {{$cpu->inventory_item}} </option>
                        @endforeach
                        <option name="cpu[]" value="NONE">NONE</option>
                      </select>
                    </div>

                    <div class="form-group col-md-12">
                      <label for="inputState"><strong>Motherboard</strong></label>
                      <select id="inputState" name="motherboard[]" class="form-control">
                        <option selected>Choose...</option>
                        @foreach($inventories['Motherboard'] as $mother)
                          <option value="{{$mother->inventory_id}}->{{$mother->inventory_item}}~~{{$mother->cost}}">{{$mother->inventory_item}}</option>
                        @endforeach
                        <option name="cpu[]" value="NONE">NONE</option>
                      </select>
                    </div>

                    <div class="form-group col-md-12">
                      <label for="inputState"><strong>Memory (RAM)</strong></label>
                      <select name="ram[]" id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        @foreach($inventories['RAM'] as $ram)
                          <option value="{{$ram->inventory_id}}->{{$ram->inventory_item}}~~{{$ram->cost}}">{{$ram->inventory_item}}</option>
                        @endforeach
                        <option name="ram[]" value="NONE">NONE</option>
                      </select>
                    </div>

                    <div class="form-group col-md-12">
                      <label for="inputState"><strong>Graphics Card / Video Card</strong></label>
                      <select name="gpu" id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        @foreach($inventories['GPU'] as $gpu)
                          <option value="{{$gpu->inventory_id}}->{{$gpu->inventory_item}}~~{{$gpu->cost}}">{{$gpu->inventory_item}}</option>
                        @endforeach
                        <option name="gpu[]" value="NONE">NONE</option>
                      </select>
                    </div>

                  </div>
                </div>
              </div>
              <br>
              <br>

              <!-- Page Heading -->
              <div class="card">
                <h5 class="card-header">STORAGE</h5>
                <div class="card-body">
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label for="inputState"><strong>Storage Drive</strong></label>
                      <select name="hdd[]" id="inputState" class="form-control" placeholder="Choose">
                        <option selected>Choose...</option>
                         @foreach($inventories['HDD'] as $hdd)
                        <option value="{{$gpu->inventory_id}}->{{$gpu->inventory_item}}~~{{$gpu->cost}}">{{$gpu->inventory_item}}</option>
                         @endforeach
                         <option name="cpu[]" value="NONE">NONE</option>
                      </select>
                    </div>

                  </div>
                </div>
              </div>
              <br>
              <br>

              <!-- Page Heading -->
              <div class="card">
                <h5 class="card-header">CHOOSE YOUR OPERATING SYSTEM AND SOFTWARE</h5>
                <div class="card-body">
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label for="inputState"><strong>Operating System</strong></label>
                      <select name="os[]" id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        @foreach($inventories['OS'] as $os)
                          <option value="{{$os->inventory_id}}->{{$os->inventory_item}}~~{{$os->cost}}">{{$os->inventory_item}}</option>
                        @endforeach
                        <option name="os[]" value="NONE">NONE</option>
                      </select>
                    </div>

                    <div class="form-group col-md-12">
                      <label for="inputState"><strong>Office Software</strong></label>
                      <select name="ms[]" id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        @foreach($inventories['MS'] as $ms)
                          <option value="{{$ms->inventory_id}}->{{$ms->inventory_item}}~~{{$ms->cost}}">{{$ms->inventory_item}}</option>
                        @endforeach
                        <option name="ms[]" value="NONE">NONE</option>
                      </select>
                    </div>

                  </div>
                </div>
              </div>
              <br>
              <br>

              <!-- Page Heading -->
              <div class="card">
                <h5 class="card-header">POWER AND COOLING</h5>
                <div class="card-body">
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label for="inputState"><strong>Power Supply</strong></label>
                      <select name="power[]" id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        @foreach($inventories['Power'] as $power)
                          <option value="{{$power->inventory_id}}->{{$power->inventory_item}}~~{{$power->cost}}">{{$power->inventory_item}}</option>
                        @endforeach
                        <option name="power[]" value="NONE">NONE</option>
                      </select>
                    </div>

                    <div class="form-group col-md-12">
                      <label for="inputState"><strong>Processor Cooling</strong></label>
                      <select name="cool[]" id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        @foreach($inventories['Cool'] as $cool)
                          <option value="{{$cool->inventory_id}}->{{$cool->inventory_item}}~~{{$cool->cost}}">{{$cool->inventory_item}}</option>
                        @endforeach
                        <option name="cool[]" value="NONE">NONE</option>
                      </select>
                    </div>

                    <div class="form-group col-md-12">
                      <label for="inputState"><strong>Extra Case Fan</strong></label>
                      <select name="fan[]" id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        @foreach($inventories['Cool'] as $fan)
                          <option value="{{$fan->inventory_id}}->{{$fan->inventory_item}}~~{{$fan->cost}}">{{$fan->inventory_item}}</option>
                        @endforeach
                        <option name="fan[]"  value="NONE" selected>NONE</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <br>

              <!-- Page Heading -->
              <div class="card">
                <h5 class="card-header">PERIPHERALS & ACCESSORIES</h5>
                <div class="card-body">
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label for="inputState"><strong>Monitor</strong></label>
                      <select name="monitor[]" id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        @foreach($inventories['Monitor'] as $monitor)
                          <option value="{{$monitor->inventory_id}}->{{$monitor->inventory_item}}~~{{$monitor->cost}}">{{$monitor->inventory_item}}</option>
                        @endforeach
                        <option name= selected>Choose...</option>
                        <option name="monitor[]"  value="NONE" selected>NONE</option>
                      </select>
                    </div>

                    <div class="form-group col-md-12">
                      <label for="inputState"><strong>Mouse</strong></label>
                      <select name="mouse[]" id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        @foreach($inventories['Mouse'] as $mouse)
                          <option value="{{$mouse->inventory_id}}->{{$mouse->inventory_item}}~~{{$mouse->cost}}">{{$mouse->inventory_item}}</option>
                        @endforeach
                        <option name="mouse[]"  value="NONE" selected>NONE</option>
                      </select>

                    </div>
                  </div>
                  <br>
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label for="inputState"><strong>Keyboard</strong></label>
                      <select name="kbd" id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        @foreach($inventories['Keyboard'] as $keyboard)
                          <option value="{{$keyboard->inventory_id}}->{{$keyboard->inventory_item}}~~{{$keyboard->cost}}">{{$keyboard->inventory_item}}</option>
                        @endforeach
                        <option name="kbd[]"  value="NONE" selected>NONE</option>
                      </select>
                    </div>

                    <div class="form-group col-md-12">
                      <label for="inputState"><strong>Headsets</strong></label>
                      <select name="head[]" id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        @foreach($inventories['Headset'] as $headset)
                          <option value="{{$headset->inventory_id}}->{{$headset->inventory_item}}~~{{$headset->cost}}">{{$headset->inventory_item}}</option>
                        @endforeach
                        <option name="head[]"  value="NONE" selected>NONE</option>
                      </select>
                    </div>

                  </div>
                </div>
              </div>
              <br>

              <div class="text-right">
                <a href="summaryreport.html" class="btn btn-primary">View Summary</a>
                <a href="#" class="btn btn-primary">Save a Copy</a>
              </div>
              <br><br>
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


  <!-- Bootstrap core JavaScript-->
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/js/sb-admin-2.min.js"></script>

  <!--forms bootstrap-->

  <script src='http://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places'></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/geocomplete/1.7.0/jquery.geocomplete.min.js'></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js'></script>

  <!-- JS -->
    <script src="/vendor/bootstrap/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>



  <script  src="/js/index.js"></script>


</body>

</html>
