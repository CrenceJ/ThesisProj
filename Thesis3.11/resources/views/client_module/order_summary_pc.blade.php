<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Summary Report</title>

  <!-- Custom fonts for this template -->
  <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <script type="text/javascript" src="/js/date_time.js"></script>

 

  
      <link rel="stylesheet" href="css/tables.css">

 
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
        <div class="sidebar-brand-text mx-3">Hi There! </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      @include('client_module.includes.nav')

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
     

      <!-- Nav Item - Pages Collapse Menu -->
   

      <!-- Nav Item - Charts -->
      

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
           @include('client_module.includes.user_info');

          </ul>

        </nav>
        <!-- End of Topbar -->
        <!--BUTTON
         <div class="container text-right">
          <a href="services.html"><button type="button" class="btn btn-primary d-inline">&laquo; Previous</button></a>
        </div>
        <br>
-->
        <!-- Begin Page Content -->
		<div class="container-fluid">
          <div class="container text-right">
          <a href="/customize?order_type={{$client[3]}}"><button type="button" class="btn btn-primary d-inline">&laquo; Back</button></a>
        </div>
        <br>
        <div class="container-fluid">

          

          <!-- DataTales Example -->
<div id="page-wrapper">
  
  
  <!-- Specifying an 'open' attribute will make all the content visible when the page loads -->
 
  <form action="/info" method="GET">
      {{csrf_field()}}
    <table>
      <tr>

        <th scope="row">CPU</th>
        <td>
        <input name='processor' value='{{$order["cpu"]}}' hidden>
        </td>

      </tr>

          <tr>
        <th scope="row">Motherboard</th>
        <td>
         
            
              <input name='motherboard' value='{{$order["motherboard"]}}' hidden>
            }
            }

        </td>

      </tr>

          <tr>
        <th scope="row">Memory</th>
        <td>
         
              <input name='memory' value='{{$memory}}' hidden>
        </td>
      </tr>
      <tr>
        <th scope="row">Graphics/Video Card</th>
        <td>

              <input name='gpu' value='{{$gpu}}' hidden>
        </td>
      </tr>
      <tr>
        <th scope="row">Operating System </th>
        <td>
              <input name='os' value='{{$os}}' hidden>
        </td>
      </tr>
      <tr>
        <th scope="row">Office Software</th>
        <td>
              <input name='office' value='{{$office}}' hidden>
        </td>
      </tr>
        <tr>
        <th scope="row">Power Supply</th>
        <td>
         
              <input name='power' value='{{$power}}' hidden>
        </td>
      </tr>
        <tr>
        <th scope="row">Processor Cooling</th>
        <td>
         
              <input name='cooling' value='{{$cooling}}' hidden>
        </td>
      </tr>

        <tr>
        <th scope="row">Extra Case Fan</th>
        <td>
         
              <input name='fan' value='{{$fan}}' hidden>
        </td>
      </tr>

        <tr>
        <th scope="row">Monitor</th>
        <td>
              <input name='monitor' value='{{$monitor}}' hidden>
        </td>
      </tr>
	  
	  <tr>
        <th scope="row">Mouse</th>
        <td>
              <input name='mouse' value='{{$mouse}}' hidden>
        </td>
      </tr>
	  
	  <tr>
        <th scope="row">Keyboard</th>
        <td>
              <input name='keyboard' value='{{$keyboard}}' hidden>
        </td>
      </tr>
	  
	  <tr>
        <th scope="row">Headsets</th>
        <td>
         
              <input name='headset' value='{{$headset}}' hidden>
        </td>
      </tr>


    </table> <br>
    
        <button type="submit" class="btn btn-primary"> Confirm Order </button> 
        <!-- save clients and inventories -->
    </form>

  




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

  <!-- Page level plugins -->
  <script src="/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="/js/demo/datatables-demo.js"></script>

</body>

</html>
