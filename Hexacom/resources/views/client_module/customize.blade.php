<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>


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
        @include('Admin.includes.nav')
      </div>



      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
          <li class="active"><a href="/service_engineer"><i class="fa fa-bullseye"></i> Dashboard</a></li>
          <li><a href='services'><i class="fa fa-tasks"></i> Services</a></li>
          <li><a href='sales'><i class="fa fa-globe"></i> Sales</a></li>
          <li><a href='inventory'><i class="fa fa-list-ul"></i> Inventory</a></li>
          <li><a href='settings'><i class="fa fa-list-ul"></i> Orders</a></li>
          <li><a href='purchase-parts'><i class="fa fa-list-ul"></i> Purchase Parts</a></li>
          <li><a href='settings'><i class="fa fa-list-ul"></i> Notifications</a></li>
          <li><a href='reports'><i class="fa fa-list-ul"></i> Reports</a></li>
        </ul>
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


    @include('Admin.includes.user_info')

	<!-- Start -->
  <div class="container-fluid" id="page-wrapper">

  <!-- Page Heading -->
  <form action="/ordersummary" method="POST" autocomplete="off">
  {{csrf_field()}}
  <input hidden name="category" value="{{$_GET['order_type']}}">
  <div class="card">
    <div class="card-body-forCustomize">


    <div class="form-row">
        <div class="form-group col-md-5">
          <label for="inputState">OR Number</label>
          <div class="input-group">
            <span class="input-group-addon">
              <i class="fa fa-user"></i>
            </span>
            <input type="text" name="or_no" class="form-control" placeholder="123ABC" required>
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
            <input type="text" name="lname" class="form-control" id="inputLastname" placeholder="Last name" required>
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
            <input name="contact" type="number" id="phone" data-plugin-maxlength maxlength="11" data-plugin-masked-input data-input-mask="09999999999" placeholder="09532454000" class="form-control">
          </div>
        </div>
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>



      <!-- Page Heading -->
      <div class="card">
        <h5 class="card-header">CHOOSE YOUR CORE COMPONENTS</h5>
        <div class="card-body">
          <div class="form-row">
            <label for="inputState"><strong>Processor (CPU)</strong></label>
            <div class="form-group col-md-12" id="cpuform">
              @if($_GET['order_type'] == 'Pending')

              <span id="cpu-body">
                  <span class="content-row" id="cpu-dup">
                  <input type="text" class="content-cpu" name="cpu[]" placeholder="specify order, blank if none..." /> &nbsp;
                  <button type="button" onclick="additems('cpu')" class="btn btn-success"> + </button>
                  <button disabled type="button" onclick="deleteitems('cpu')" class="cpu-btn-del btn btn-danger"> - </button>
                  <br></span>
             </span>
              @else
              @foreach($inventories['CPU'] as $cpu)

              <div class="form-check">
                <input class="cpu cpu2 form-check-input" type="checkbox" name="cpu[]" value="{{$cpu->inventory_id}}->{{$cpu->inventory_item}}~~{{$cpu->cost}}">
                <label class="form-check-label" for="defaultCheck1">{{$cpu->inventory_item}}</label>
              </div>

              @endforeach
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="cpu[]" value="NONE" onchange="disableField('cpu')">
                <label class="form-check-label" for="defaultCheck1">NONE</label>
              </div><br>
              @endif

            </div>

            <div class="form-group col-md-12" id="motherboardform">
              <label for="inputState"><strong>Motherboard</strong></label><br>

              @if($_GET['order_type'] == 'Pending')

              <span id="motherboard-body">
                  <span class="content-row" id="motherboard-dup">
                  <input type="text" class="content-motherboard" name="motherboard[]" placeholder="specify order, blank if none..." /> &nbsp;
                  <button type="button" onclick="additems('motherboard')" class="btn btn-success"> + </button>
                  <button disabled type="button" onclick="deleteitems('motherboard')" class="motherboard-btn-del btn btn-danger"> - </button>
                  <br></span>
             </span>
              @else

              @foreach($inventories['Motherboard'] as $motherboard)
              <div class="form-check">
                <input class="motherboard motherboard2 form-check-input" name="motherboard[]" type="checkbox" value="{{$motherboard->inventory_id}}->{{$motherboard->inventory_item}}~~{{$motherboard->cost}}" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">{{$motherboard->inventory_item}}</label>
              </div>
              @endforeach
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="motherboard[]" value="NONE" onchange="disableField('motherboard')">
                <label class="form-check-label" for="defaultCheck1">NONE</label>
              </div>
            @endif
            </div>

            <div class="form-group col-md-12">
              <label for="inputState"><strong>Memory (RAM)</strong></label>
              <br>
              @if($_GET['order_type'] == 'Pending')

              <span id="ram-body">
                  <span class="content-row" id="ram-dup">
                  <input type="text" class="content-ram" name="ram[]" placeholder="specify order, blank if none..." /> &nbsp;
                  <button type="button" onclick="additems('ram')" class="btn btn-success"> + </button>
                  <button disabled type="button" onclick="deleteitems('ram')" class="ram-btn-del btn btn-danger"> - </button>
                  <br></span>
             </span>
              @else

              @foreach($inventories['RAM'] as $ram)
              <div class="form-check">
                <input class="ram ram2 form-check-input" name="ram[]" type="checkbox" value="{{$ram->inventory_id}}->{{$ram->inventory_item}}~~{{$ram->cost}}">
                <label class="form-check-label" for="defaultCheck1">{{$ram->inventory_item}}</label>
              </div>
              @endforeach
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="ram[]" value="NONE" onchange="disableField('ram')">
                <label class="form-check-label" for="defaultCheck1">NONE</label>
              </div>
            @endif
            </div>

            <div class="form-group col-md-12">
              <label for="inputState"><strong>Graphics/Video Card </strong></label><br>
              @if($_GET['order_type'] == 'Pending')

              <span id="gpu-body">
                  <span class="content-row" id="gpu-dup">
                  <input type="text" class="content-gpu" name="gpu[]" placeholder="specify order, blank if none..." /> &nbsp;
                  <button type="button" onclick="additems('gpu')" class="btn btn-success"> + </button>
                  <button disabled type="button" onclick="deleteitems('gpu')" class="gpu-btn-del btn btn-danger"> - </button>
                  <br></span>
             </span>
              @else
              @foreach($inventories['GPU'] as $gpu)
              <div class="form-check">
                <input class="gpu gpu2 form-check-input" name="gpu[]" type="checkbox" value="{{$gpu->inventory_id}}->{{$gpu->inventory_item}}~~{{$gpu->cost}}" id="defaultCheck1" >
                <label class="form-check-label" for="defaultCheck1">{{$gpu->inventory_item}}</label>
              </div>
              @endforeach
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="gpu[]" value="NONE" onchange="disableField('gpu')">
                <label class="form-check-label" for="defaultCheck1">NONE</label>
              </div>
              @endif
            </div>
          </div>
        </div>
      </div>

      <!-- Page Heading -->
      <div class="card">
        <h5 class="card-header">STORAGE</h5>
        <div class="card-body">
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputState"><strong>Storage Drive</strong></label>
              <br>
              @if($_GET['order_type'] == 'Pending')

              <span id="hdd-body">
                  <span class="content-row" id="hdd-dup">
                  <input type="text" class="content-hdd" name="hdd[]" placeholder="specify order, blank if none..." /> &nbsp;
                  <button type="button" onclick="additems('hdd')" class="btn btn-success"> + </button>
                  <button disabled type="button" onclick="deleteitems('hdd')" class="hdd-btn-del btn btn-danger"> - </button>
                  <br></span>
             </span>
              @else
              @foreach($inventories['HDD'] as $hdd)
              <div class="form-check">
                <input class="hdd hdd2 form-check-input" type="checkbox" value="{{$hdd->inventory_id}}->{{$hdd->inventory_item}}~~{{$hdd->cost}}" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">{{$hdd->inventory_item}}</label>
              </div>
              @endforeach
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="hdd[]" value="NONE" onchange="disableField('hdd')">
                <label class="form-check-label" for="defaultCheck1">NONE</label>
              </div>
            @endif

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
      <!-- Page Heading -->
      <div class="card" id="software">
        <h5 class="card-header">CHOOSE YOUR OPERATING SYSTEM AND SOFTWARE</h5>
        <div class="card-body">
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputState"><strong>Operating System</strong></label>
              <br>
              @if($_GET['order_type'] == 'Pending')

              <span id="os-body">
                  <span class="content-row" id="os-dup">
                  <input type="text" class="content-os" name="os[]" placeholder="specify order, blank if none..." /> &nbsp;
                  <button type="button" onclick="additems('os')" class="btn btn-success"> + </button>
                  <button disabled type="button" onclick="deleteitems('os')" class="os-btn-del btn btn-danger"> - </button>
                  <br></span>
             </span>
              @else
              @foreach($inventories['OS'] as $os)
              <div class="form-check">
                <input class="os os2 form-check-input" type="checkbox" name="os[]" value="{{$os->inventory_id}}->{{$os->inventory_item}}~~{{$os->cost}}" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">{{$os->inventory_item}}</label>
              </div>
              @endforeach
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="os[]" value="NONE" onchange="disableField('os')">
                <label class="form-check-label" for="defaultCheck1">NONE</label>
              </div>
              @endif
            </div>

            <div class="form-group col-md-12">
              <label for="inputState"><strong>Office Software</strong></label>
              <BR>
              @if($_GET['order_type'] == 'Pending')

              <span id="ms-body">
                  <span class="content-row" id="ms-dup">
                  <input type="text" class="content-ms" name="ms[]" placeholder="specify order, blank if none..." /> &nbsp;
                  <button type="button" onclick="additems('ms')" class="btn btn-success"> + </button>
                  <button disabled type="button" onclick="deleteitems('ms')" class="ms-btn-del btn btn-danger"> - </button>
                  <br></span>
             </span>
              @else
              @foreach($inventories['MS'] as $ms)
              <div class="form-check">
                <input class="ms ms2 form-check-input" type="checkbox" value="{{$ms->inventory_id}}->{{$ms->inventory_item}}~~{{$ms->cost}}" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">{{$ms->inventory_item}}</label>
              </div>
              @endforeach
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="ms[]" value="NONE" onchange="disableField('ms')">
                <label class="form-check-label" for="defaultCheck1">NONE</label>
              </div>
              @endif
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
              <label for="inputState"><strong>Power Supply</strong></label><br>
              @if($_GET['order_type'] == 'Pending')

              <span id="power-body">
                  <span class="content-row" id="power-dup">
                  <input type="text" class="content-power" name="power[]" placeholder="specify order, blank if none..." /> &nbsp;
                  <button type="button" onclick="additems('power')" class="btn btn-success"> + </button>
                  <button disabled type="button" onclick="deleteitems('power')" class="power-btn-del btn btn-danger"> - </button>
                  <br></span>
             </span>
              @else
              @foreach($inventories['Power'] as $power)
              <div class="form-check">
                <input class="power power2 form-check-input" type="checkbox" name="power[]" value="{{$power->inventory_id}}->{{$power->inventory_item}}~~{{$power->cost}}" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">{{$power->inventory_item}}</label>
              </div>
              @endforeach
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="power[]" value="NONE" onchange="disableField('power')">
                <label class="form-check-label" for="defaultCheck1">NONE</label>
              </div>
              @endif
            </div>

            <div class="form-group col-md-12">
              <label for="inputState"><strong>Processor Cooling</strong></label><br>
              @if($_GET['order_type'] == 'Pending')

              <span id="cool-body">
                  <span class="content-row" id="cool-dup">
                  <input type="text" class="content-cool" name="cool[]" placeholder="specify order, blank if none..." /> &nbsp;
                  <button type="button" onclick="additems('cool')" class="btn btn-success"> + </button>
                  <button disabled type="button" onclick="deleteitems('cool')" class="cool-btn-del btn btn-danger"> - </button>
                  <br></span>
             </span>
              @else
              @foreach($inventories['Cool'] as $cool)
              <div class="form-check">
                <input class="cool cool2 form-check-input" type="checkbox" name="cool[]" value="{{$cool->inventory_id}}->{{$cool->inventory_item}}~~{{$cool->cost}}" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">{{$cool->inventory_item}}</label>
              </div>
              @endforeach
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="cool[]" value="NONE" onchange="disableField('cool')">
                <label class="form-check-label" for="defaultCheck1">NONE</label>
              </div>
              @endif
            </div>

            <div class="form-group col-md-12">
              <label for="inputState"><strong>Extra Case Fan</strong></label><br>
              @if($_GET['order_type'] == 'Pending')

              <span id="fan-body">
                  <span class="content-row" id="fan-dup">
                  <input type="text" class="content-fan" name="fan[]" placeholder="specify order, blank if none..." /> &nbsp;
                  <button type="button" onclick="additems('fan')" class="btn btn-success"> + </button>
                  <button disabled type="button" onclick="deleteitems('fan')" class="fan-btn-del btn btn-danger"> - </button>
                  <br></span>
             </span>
              @else
              @foreach($inventories['Fan'] as $fan)
              <div class="form-check">
                <input class="fan fan2 form-check-input" type="checkbox" value="{{$fan->inventory_id}}->{{$fan->inventory_item}}~~{{$fan->cost}}" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">{{$fan->inventory_item}}</label>
              </div>
              @endforeach
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="fan[]" value="NONE" onchange="disableField('fan')">
                <label class="form-check-label" for="defaultCheck1">NONE</label>
              </div>
              @endif
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
              <label for="inputState"><strong>Monitor</strong></label><br>
              @if($_GET['order_type'] == 'Pending')

              <span id="monitor-body">
                  <span class="content-row" id="monitor-dup">
                  <input type="text" class="content-monitor" name="monitor[]" placeholder="specify order, blank if none..." /> &nbsp;
                  <button type="button" onclick="additems('monitor')" class="btn btn-success"> + </button>
                  <button disabled type="button" onclick="deleteitems('monitor')" class="monitor-btn-del btn btn-danger"> - </button>
                  <br></span>
             </span>
              @else
              @foreach($inventories['Monitor'] as $mon)
              <div class="form-check">
                <input class="monitor monitor2 form-check-input" type="checkbox" value="{{$mon->inventory_id}}->{{$mon->inventory_item}}~~{{$mon->cost}}" name="monitor[]" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">{{$mon->inventory_item}}</label>
              </div>
              @endforeach
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="monitor[]" value="NONE" onchange="disableField('monitor')">
                <label class="form-check-label" for="defaultCheck1">NONE</label>
              </div>
              @endif
            </div>

            <div class="form-group col-md-12">
              <label for="inputState"><strong>Mouse</strong></label><br>
              @if($_GET['order_type'] == 'Pending')

              <span id="mouse-body">
                  <span class="content-row" id="mouse-dup">
                  <input type="text" class="content-mouse" name="mouse[]" placeholder="specify order, blank if none..." /> &nbsp;
                  <button type="button" onclick="additems('mouse')" class="btn btn-success"> + </button>
                  <button disabled type="button" onclick="deleteitems('mouse')" class="mouse-btn-del btn btn-danger"> - </button>
                  <br></span>
             </span>
              @else
              @foreach($inventories['Mouse'] as $mou)
              <div class="form-check">
                <input class="mouse mouse2 form-check-input" type="checkbox" value="{{$mou->inventory_id}}->{{$mou->inventory_item}}~~{{$mou->cost}}" name="mouse[]" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">{{$mou->inventory_item}}</label>
              </div>
              @endforeach
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="mouse[]" value="NONE" onchange="disableField('mouse')">
                <label class="form-check-label" for="defaultCheck1">NONE</label>
              </div>
              @endif
            </div>
          </div>
          <br>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputState"><strong>Keyboard</strong></label><br>
              @if($_GET['order_type'] == 'Pending')

              <span id="keyboard-body">
                  <span class="content-row" id="keyboard-dup">
                  <input type="text" class="content-keyboard" name="keyboard[]" placeholder="specify order, blank if none..." /> &nbsp;
                  <button type="button" onclick="additems('keyboard')" class="btn btn-success"> + </button>
                  <button disabled type="button" onclick="deleteitems('keyboard')" class="keyboard-btn-del btn btn-danger"> - </button>
                  <br></span>
             </span>
              @else
              @foreach($inventories['Keyboard'] as $key)
              <div class="form-check">
                <input class="keyboard keyboard2 form-check-input" type="checkbox" value="{{$key->inventory_id}}->{{$key->inventory_item}}~~{{$key->cost}}" name="keyboard[]" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">{{$key->inventory_item}}</label>
              </div>
              @endforeach
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="keyboard[]" value="NONE" onchange="disableField('keyboard')">
                <label class="form-check-label" for="defaultCheck1">NONE</label>
              </div>
              @endif
            </div>

            <div class="form-group col-md-12">
              <label for="inputState"><strong>Headsets</strong></label><br>
              @if($_GET['order_type'] == 'Pending')

              <span id="headset-body">
                  <span class="content-row" id="headset-dup">
                  <input type="text" class="content-headset" name="headset[]" placeholder="specify order, blank if none..." /> &nbsp;
                  <button type="button" onclick="additems('headset')" class="btn btn-success"> + </button>
                  <button disabled type="button" onclick="deleteitems('headset')" class="headset-btn-del btn btn-danger"> - </button>
                  <br></span>
             </span>
              @else
              @foreach($inventories['Headset'] as $head)
              <div class="form-check">
                <input class="headset headset2 form-check-input" type="checkbox" value="{{$head->inventory_id}}->{{$head->inventory_item}}~~{{$head->cost}}" name="headset[]" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">{{$head->inventory_item}}</label>
              </div>
              @endforeach
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="headset[]" value="NONE" onchange="disableField('headset')">
                <label class="form-check-label" for="defaultCheck1">NONE</label>
              </div>
              @endif
            </div>

          </div>
        </div>
      </div>
      <br>

      <div class="text-right">
        <button type="submit" class="btn btn-primary">View Summary</a>
      </div>
      <br><br>
    </div>

	<!-- End -->

        <!-- /#wrapper -->

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
<script>
function disableField(type) {
  var dom = document.getElementsByClassName(type);
  var dom2 = document.getElementsByClassName(type+"2");


  var length = dom.length;
  var length2 = dom2.length;

  for(i=0; i<length; i++) {
    if(dom[i].hasAttribute("disabled")) {
      dom[i].removeAttribute("disabled");
    } else {
      dom[i].setAttribute('disabled', '');
    }

  }

  for(j=0; j<length2; j++) {
    dom[j].checked=false;
  }
}

</script>

<script>

function pending(type, formtype)
{
    document.getElementById(formtype).setAttribute('style', 'display: none');

    var newform = "<div class='form-group' id='cpuformnew'>"+
                      "<input type='text' required placeholder='specify...'>"+
                      "<label class='form-check-label'>Order</label>"+
                    "</div>";
    document.getElementById(formtype+"new").innerHTML = newform;
}

function additems(type) {
  $('#'+type+'-dup').clone().appendTo('#'+type+"-body");

  var attr = $('.'+type+'-btn-del');
  var x = attr.length;
  if(x >= 1){
    attr.removeAttr('disabled');
  }
}

function deleteitems(type) {
  $('#'+type+'-dup').remove();
  var attr = $('.'+type+'-btn-del');
  var x = attr.length;
  if(x === 1){
    $('.'+type+'-btn-del').attr('disabled', '');

  }
}


</script>
</html>
