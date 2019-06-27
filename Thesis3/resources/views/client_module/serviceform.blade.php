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
          <li class="active"><a href='myservices'><i class="fa fa-tasks"></i> Services</a></li>
          <li><a href='inventory'><i class="fa fa-list-ul"></i> Inventory</a></li>


          <li><a href='/customize?order_type=pc'><i class="fa fa-list-ul"></i> Build A PC</a></li>

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

    @include('Admin.includes.user_info')
    <br>




    <br>
    <div class="container-fluid">

      <!-- Page Heading -->
      <!--<h1 class="h3 mb-4 text-gray-800">Customize</h1>-->
      <!--beginnning of Forms-->
      <form action="#" method="POST" autocomplete="off">
      {{ csrf_field() }}
      <div class="card">
        <h5 class="card-header"></h5>
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
    @if(isset($success))

    @if($success)
    <script>

      alert('Successfully added service');

    </script>

    @else(!$success)
    <script>

      alert("Error, Brand type doesnt match!");

    </script>

    @endif
@endif
    </html>
