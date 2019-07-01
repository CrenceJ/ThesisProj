
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>

    <link rel="icon" href="../img/favicon.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

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
                <li><a href='index'><i class="fa fa-bullseye"></i> Services Dashboard</a></li>
                <li><a href='posts'><i class="fa fa-tasks"></i> Inventory</a></li>
                <li class>
              <a class="nav-link collapse" href="#" data-toggle="collapse" data-target="#collapseOrders" aria-expanded="true" aria-controls="collapseOrders">
                  <i class="fa fa-globe"></i>
                  <span>Sales Records</span>
              </a>
              <div id="collapseOrders" class="collapse" aria-labelledby="headingOrders" data-parent="#accordionSidebar">
                  <div>
                      <div><a class="collapse-item btn" href='/orders'>Charge Invoice</a></div>
                      <div><a class="collapse-item btn" href='/ordersreq'>Cash Invoice</a></div>
                  </div>
              </div>
          </li>
                <li><a href='replacement'><i class="fa fa-list-ul"></i> Replacement Forms</a></li>
                <li class="active"><a href='settings'><i class="fa fa-list-ul"></i> Settings</a></li>

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
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Esse POP<b class="caret"></b></a>
                      <ul class="dropdown-menu">
                          <li><a href='logout'><i class="fa fa-power-off"></i> Log Out</a></li>
                      </ul>
                  </li>
              </ul>
          </div>
      </nav>

        <div id="page-wrapper">
          <form class="form-horizontal form-bordered" action="#">

               <!--ending & start-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="inputDefault">First Name</label>
              <div class="col-md-3">
                <input type="text" class="form-control" id="inputDefault" value="Graeham">
              </div>
            </div>
              <!--ending & start-->

               <div class="form-group">
              <label class="col-md-3 control-label" for="inputDefault">Last Name</label>
              <div class="col-md-3">
                <input type="text" class="form-control" id="inputDefault" value="Graeham">
              </div>
            </div>
            <!--ending & start-->
             <div class="form-group">
              <label class="col-md-3 control-label" for="inputDefault">Username</label>
              <div class="col-md-3">
                <input type="text" class="form-control" id="inputDefault" value="Graeham">
              </div>
            </div>
            <!--ending & start-->
             <div class="form-group">
              <label class="col-md-3 control-label" for="inputDefault">Password</label>
              <div class="col-md-3">
                <input type="text" class="form-control" id="inputDefault" value="Graeham">
              </div>
            </div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#success">Save Changes</button>
            <!--ending & start-->

            <!--ending & start-->
          </form>
        </div>

        <div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="m-0 font-weight-bold text-primary" id="myModalLabel">Success</h3>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

</div>

</body>
</html>
