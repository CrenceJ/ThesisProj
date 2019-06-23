<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="author" content="">

  <title>Reports</title>

  <!-- Custom fonts for this template -->
  <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
<div class="container">
@if($type == 'inventory')
<?php $available = 0; $sold = 0;?>
  <table class="table">
    <thead>
    <tr>
    <th> Item </th>
    <th> Brand </th>
    <th> Supplier </th>
    <th> Serial </th>
    <th> Status </th>
    <th> Cost </th>
    </tr>
    </thead>

    <tbody>
    @foreach($inventory as $inv)
    <tr>
    <td> {{$inv->inventory_item}}</td>
    <td> {{$inv->inventory_brand}}</td>
    <td> {{$inv->inventory_supplier}}</td>
    <td> {{$inv->inventory_serial_no}}</td>
    <td> {{$inv->inventory_status}}</td>
    <td> {{$inv->cost}}</td>
    </tr>
    @if($inv->inventory_status == 'Sold')
    <?php $available++; ?>
    @else
    <?php $sold++; ?>
    @endif
    @endforeach
    </tbody>

  </table>
  <h3 style="color:green"> Total Sold: {{$available}} </h3>
  <h3 style="color:red"> Total Available: {{$sold}} </h3>
@endif

@if($type == 'sales')
<?php $totalCost = 0; ?>
  <table class="table">
    <thead>
    <tr>
    <th> Order Number </th>
    <th> Client </th>
    <th> Type of sale </th>
    <th> Cost </th>
    <th> Date </th>
    </tr>
    </thead>

    <tbody>
    @foreach($sales as $sale)
    
    <tr>
    <td> {{$sale->or_number}}</td>
    <td> {{$sale->name}}</td>
    <td> {{$sale->order_type}}</td>
    <td> {{$sale->cost}}</td>
    <td> {{$sale->created_at}}</td>
    </tr>
    <?php $totalCost+= $sale->cost ?>
    @endforeach
    </tbody>
  </table>
  <h3 style="color:red"> Total Cost : {{$totalCost}} </h3>
@endif

@if($type == 'order')
<?php $total = 0; ?>
  <table class="table">
    <thead>
    <tr>
    <th> Order Number </th>
    <th> Client </th>
    <th> Type of sale </th>
    <th> Status </th>
    <th> Date </th>
    </tr>
    </thead>

    <tbody>
    @foreach($ord as $o)
    
    <tr>
    <td> {{$o->or_number}}</td>
    <td> {{$o->first_name}} {{$o->last_name}}</td>
    <td> {{$o->order_type}}</td>
    <td> {{$o->order_status}}</td>
    <td> {{$o->created_at}}</td>
    </tr>
    <?php $total++; ?>
    @endforeach
    </tbody>
  </table>
  <h3 style="color:red"> Total Orders : {{$total}} </h3>
@endif

@if($type == 'service')
<?php $total = 0; ?>
  <table class="table">
    <thead>
    <tr>
    <th> Srf No</th>
    <th> Brand </th>
    <th> Warranty</th>
    <th> Status </th>
    <th> Service Cost </th>
    <th> Service Date </th>
    </tr>
    </thead>

    <tbody>
    @foreach($serv as $s)
    
    <tr>
    <td> {{$s->srf_no}}</td>
    <td> {{$s->brand}} </td>
    <td> {{$s->warranty}}</td>
    <td> {{$s->STATUS}}</td>
    <td> {{$s->service_cost}}</td>
    <td> {{$s->created_at}}</td>
    </tr>
    <?php $total++; ?>
    @endforeach
    </tbody>
  </table>
  <h3 style="color:red"> Total Orders : {{$total}} </h3>
@endif

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


</html>
