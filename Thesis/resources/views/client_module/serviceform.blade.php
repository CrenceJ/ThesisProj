<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>{{ucfirst($formType)}}</title>

  <!-- Custom fonts for this template-->
  <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="/css/sb-admin-2.min.css" rel="stylesheet">
  <script type="text/javascript" src="/js/date_time.js"></script>

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
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/service_engineer">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Hi there! </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      @include('client_module.includes.nav')

      <!-- Divider -->
      <hr class="sidebar-divider">

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

            

            

            <!-- Nav Item - User Information -->
            @include('client_module.includes.user_info')

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="container text-right">
          <a href="/addservices"><button type="button" class="btn btn-primary d-inline">&laquo; Back</button></a>
        </div>
        <br>
        <div class="container-fluid">

          <!-- Page Heading -->
          <!--<h1 class="h3 mb-4 text-gray-800">Customize</h1>-->
          <!--beginnning of Forms-->
          <form action="#" method="POST" autocomplete="off">
          {{ csrf_field() }}
          <div class="card">
            <h5 class="card-header">{{ucfirst($formType)}}</h5>
            <div class="card-body-forOthers">

              <div class='card-body'>
              <input hidden name="hidden_brand" value="{{$formType}}">
                <!-- DATE -->
                <h3> Client Info </h3> <br>
                <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputState">SRF No</label>
                  <div class="input-group">
                    <input id="generator" required name="srf" type="text" data-plugin-datepicker class="form-control" required>
                    &nbsp; <span class="btn btn-warning" id="buttonGen"> Generate SRF number</span>
                  </div>
                </div>
              </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputFirstName">First Name</label>
                    <div class="input-group">
                      <input type="text" name="fname" class="form-control" id="inputFirstname" placeholder="First name" required>
                    </div>
                  </div>


                  <div class="form-group col-md-6">
                    <label for="inputLastName">Last Name</label>
                    <div class="input-group">
                      <input type="text" name="lname" class="form-control" id="inputLastname" placeholder="Last name">
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="inputState">Complete Address.</label>
                    <div class="input-group">
                      <input type="text" name="addr" class="form-control" id="inputAddress" placeholder="123 Main St.">
                    </div>
                  </div>
                

                <div class="form-group col-md-4">
                    <label for="inputState">Email</label>
                    <div class="input-group">
                      <input type="email" name="email" id="email"  placeholder="jdoe@gmail.com" class="form-control">
                    </div>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="inputState">Phone</label>
                    <div class="input-group">
                      <input type="number" name="cp_no" id="phone" data-plugin-maxlength maxlength="11" data-plugin-masked-input data-input-mask="09999999999" placeholder="09532454000" class="form-control">
                    </div>
                  </div>


                  <div class="form-group col-md-4">
                    <label for="inputState">Landline</label>
                    <div class="input-group">
                      <input type="number" name="landline" id="landline" data-plugin-maxlength maxlength="7" data-plugin-masked-input data-input-mask="0751531" placeholder="0751531" class="form-control">
                    </div>
                  </div>
                  </div><br>
                <h3> Service Info </h3><br>
                <div class='form-row'>
                  <!--before a row-->
                  <div class="form-group col-md-4">
                    <label for="inputState">Model</label>
                    <div class="input-group">
                      <input type="text" id="model" name="model" placeholder="ED8536" class="form-control">
                    </div>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="inputState">Serial Number</label>
                    <div class="input-group">
                      <input id="serial-number" name="serial" type="text" placeholder="ED8536" class="form-control">
                    </div>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="inputState">Case ID</label>
                    <div class="input-group">
                      <input id="serial-number" name="case_id" type="text" placeholder="ED8536" class="form-control">
                    </div>
                  </div><!--after a row-->
                  </div>

                  @if($formType == 'others')
                  <div class="form-group col-md-4">
                    <label for="inputState">Brand</label>
                    <div class="input-group">
                      <input id="serial-number" name="brand_type" type="text" placeholder="ASUS/APPLE etc" class="form-control">
                    </div>
                  </div><!--after a row-->
                  </div>
                  @endif

                <p><strong>Please choose the problem you encounter with the unit. It is advisable to be more specific to address the problem easily</strong></p>

                <div class='form-row'>
                  <div class='form-group col-md-12'>
                    <label class='col-form-label' for='venue_city'>Did you back-up your files?</label>
                  </div>

                  <div class='form-group col-md-2'>
                    <p><input name="backup" type="checkbox" id="HelloWorld" value="no"></p>
                  </div>

                </div> <!--form row-->
                


                <div class='form-row'>
                  <div class='form-group col-md-4'>
                    <label class='col-form-label'for='venue_zip'>Unit's Password</label>
                    <input placeholder="don't worry we won't share it"  class='form-control' id='venue_zip' name='password' type='password'>
                  </div>

                  <div class='form-group col-md-4'>
                    <label class='col-form-label' for='venue_zip'>Included Accesories</label>
                    <input  placeholder="Charger, mouse, keyboard..." class='form-control' id='venue_zip' name='acc' type='text'>
                  </div>


                  <div class='form-group col-md-4'>
                    <label class='col-form-label' for='venue_zip'>Service Fee</label>
                    <input  placeholder="Service fee amount" class='form-control' name='servfee' type='number' required>
                  </div>
                </div> <!--end of form row-->
                



                <div class='form-row'>
                  <div class='form-group col-md-12'>
                    <label class="label">
                      Indicate the defects here: 
                    </label>
                      
                      
                      <table>
                      <tbody id="table-body">
                          <tr class="content-row">
                          <input type="text" class="content-row" name="sira[]" placeholder="LCD / no boot etc..." />
                          </tr>
                      </tbody>
                     </table><br>
                     <button type="button" class="btn btn-success" id="add-row-btn">Add Defect</button>
                      <button type="button" class="btn btn-danger" id="delete-row-btn">Delete Defect </button>
                </div>
              </div>

              <div class="text-right">
                <button class="btn btn-primary" type="submit"> Save Service </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!--end of forms-->
  </form>
</div>
</div>
</div>
</div>
</div><!-- /.container-fluid -->
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

<script>
    document.getElementById('HelloWorld').onclick = function() {
      console.log(document.getElementById('HelloWorld').value);
        if(document.getElementById('HelloWorld').value == 'no') {
          document.getElementById('HelloWorld').value = 'yes';
        } else if(document.getElementById('HelloWorld').value == 'yes') {
          document.getElementById('HelloWorld').value = 'no';
        }
        
    }

    document.getElementById('buttonGen').onclick = function() {
        document.getElementById("generator").value = (Math.random() * 100000000).toFixed(0);
    }

    $(document).ready(function(){
    //declarations
    var trCount = $(".content-row").length;

    // Add Row
    $("#add-row-btn").click(function(){
        $("#table-body").append("<tr><td><input type='text' class='content-row' name='sira[]' placeholder='LCD / no boot etc...' /></td></tr>"); // modify to adapt to your needs you're welcome
        trCount++;
        if(trCount > 0){
            $("#delete-row-btn").show();
        }
    })
    // Delete Row
    $("#delete-row-btn").click(function(){
        $(".content-row")[trCount-1].remove();
        trCount--;
        if(trCount === 0){
            $("#delete-row-btn").hide();
        }
    })
  });
  </script>

</body>


</html>
