<div id="inventory" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Inventory</h4>
      </div>
      <div class="modal-body">
        <form action="/pdf" method="POST">
        {{csrf_field()}}
        <input hidden name="pdftype" value="inventory">
        <input hidden name="pdf" value="custom">
        From:<input type="date" name="startdate" required>  
        To:<input type="date" name="enddate" required>  
        <input type="submit" class="btn-success" value="Go">
        </form> <br>
        <h4 style="text-align: center"> OR </h4>

        <form action="/pdf" method="POST">
        {{csrf_field()}}
        <input hidden name="pdftype" value="inventory">  
        <button style="width: 100%" name="pdf" type="submit" class="btn-primary" value="daily"> Reports today </button>
        </form> <br>
        <h4 style="text-align: center"> OR </h4>

        <form action="/pdf" method="POST">
        {{csrf_field()}}
        <input hidden name="pdftype" value="inventory">  
        <button style="width: 100%" name="pdf" type="submit" class="btn-primary" value="monthly"> Reports this month </button>
        </form> <br>
        <h4 style="text-align: center"> OR </h4>

        <form action="/pdf" method="POST">
        {{csrf_field()}}
        <input hidden name="pdftype" value="inventory">  
        <button style="width: 100%" name ="pdf" type="submit" class="btn-primary" value="yearly"> Reports This Year </button>
        </form> <br>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!--  ================================================================================ -->
<div id="sales" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Sales</h4>
      </div>
      <div class="modal-body">
      <form action="/pdf" method="POST">
        {{csrf_field()}}
        <input hidden name="pdftype" value="sale">
        <input hidden name="pdf" value="custom">
        From:<input type="date" name="startdate" required>  
        To:<input type="date" name="enddate" required>  
        <input type="submit" class="btn-success" value="Go">
        </form> <br>
        <h4 style="text-align: center"> OR </h4>

        <form action="/pdf" method="POST">
        {{csrf_field()}}
        <input hidden name="pdftype" value="sale">  
        <button style="width: 100%" name="pdf" type="submit" class="btn-primary" value="daily"> Reports today </button>
        </form> <br>
        <h4 style="text-align: center"> OR </h4>

        <form action="/pdf" method="POST">
        {{csrf_field()}}
        <input hidden name="pdftype" value="sale">  
        <button style="width: 100%" name="pdf" type="submit" class="btn-primary" value="monthly"> Reports this month </button>
        </form> <br>
        <h4 style="text-align: center"> OR </h4>

        <form action="/pdf" method="POST">
        {{csrf_field()}}
        <input hidden name="pdftype" value="sale">  
        <button style="width: 100%" name ="pdf" type="submit" class="btn-primary" value="yearly"> Reports This Year </button>
        </form> <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!--  ================================================================================ -->

<div id="service" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Service</h4>
      </div>
      <div class="modal-body">
      <form action="/pdf" method="POST">
        {{csrf_field()}}
        <input hidden name="pdftype" value="service">
        <input hidden name="pdf" value="custom">
        From:<input type="date" name="startdate" required>  
        To:<input type="date" name="enddate" required>  
        <input type="submit" class="btn-success" value="Go">
        </form> <br>
        <h4 style="text-align: center"> OR </h4>

        <form action="/pdf" method="POST">
        {{csrf_field()}}
        <input hidden name="pdftype" value="service">  
        <button style="width: 100%" name="pdf" type="submit" class="btn-primary" value="daily"> Reports today </button>
        </form> <br>
        <h4 style="text-align: center"> OR </h4>

        <form action="/pdf" method="POST">
        {{csrf_field()}}
        <input hidden name="pdftype" value="service">  
        <button style="width: 100%" name="pdf" type="submit" class="btn-primary" value="monthly"> Reports this month </button>
        </form> <br>
        <h4 style="text-align: center"> OR </h4>

        <form action="/pdf" method="POST">
        {{csrf_field()}}
        <input hidden name="pdftype" value="service">  
        <button style="width: 100%" name ="pdf" type="submit" class="btn-primary" value="yearly"> Reports This Year </button>
        </form> <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!--  ================================================================================ -->

<div id="orders" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Orders</h4>
      </div>
      <div class="modal-body">
      <form action="/pdf" method="POST">
        {{csrf_field()}}
        <input hidden name="pdftype" value="order">
        <input hidden name="pdf" value="custom">
        From:<input type="date" name="startdate" required>  
        To:<input type="date" name="enddate" required>  
        <input type="submit" class="btn-success" value="Go">
        </form> <br>
        <h4 style="text-align: center"> OR </h4>

        <form action="/pdf" method="POST">
        {{csrf_field()}}
        <input hidden name="pdftype" value="order">  
        <button style="width: 100%" name="pdf" type="submit" class="btn-primary" value="daily"> Reports today </button>
        </form> <br>
        <h4 style="text-align: center"> OR </h4>

        <form action="/pdf" method="POST">
        {{csrf_field()}}
        <input hidden name="pdftype" value="order">  
        <button style="width: 100%" name="pdf" type="submit" class="btn-primary" value="monthly"> Reports this month </button>
        </form> <br>
        <h4 style="text-align: center"> OR </h4>

        <form action="/pdf" method="POST">
        {{csrf_field()}}
        <input hidden name="pdftype" value="order">  
        <button style="width: 100%" name ="pdf" type="submit" class="btn-primary" value="yearly"> Reports This Year </button>
        </form> <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>