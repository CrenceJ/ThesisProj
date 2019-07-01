<!-- Modal -->
@foreach($myServices as $serviceModal)
<form action="/updateStatus" method="POST">
{{csrf_field()}}
<div class="modal fade" id="srf{{$serviceModal->srf_no}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Update for SRF # {{$serviceModal->srf_no}}</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        
        <div class="form-group col-md-12">
            <h5 class="text-center">Client Info:</h5>
            <div class="form-group">
                <label for="namemo">First Name</label>
                <input type="text" class="form-control" name="fnameUpdate" id="namemo" value="{{$serviceModal->client->first_name}}">
            </div>

            <div class="form-group">
                <label for="namemo2">Last Name</label>
                <input type="text" class="form-control" name="lnameUpdate" id="namemo2" value="{{$serviceModal->client->last_name}}">
                <input hidden name="name_id" value="{{$serviceModal->client->client_id}}">
                <input hidden name="serv_id" value="{{$serviceModal->service_id}}">
            </div>


        </div>

        <div class="form-group col-md-12">
        <h5 class="text-center">Service Info</h5>
            <p>Current Status: {{$serviceModal->status}}</p>
            <div class="input-group">
                <select id="service-status" name="serviceStatus" style="width: 100%">
                    <option value="Waiting"> Waiting </option>
                    <option value="In Progress"> In Progress </option>
                    <option value="Done"> Done </option>
                    <option value="Back Job"> Back Job </option>
                </select>
            </div>
        </div>

      <hr>

      <div class="text-right">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <input type ="submit" class="btn btn-primary btn-user" value ="Save Changes">
      </div>
    </div>
    </div>
  </div>
</div>
</form>
@endforeach





@foreach($myServices as $serviceModal2)
<form action="/updateItems" method="POST">
{{csrf_field()}}
<div class="modal fade" id="items-srf{{$serviceModal2->srf_no}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Order Part/s For SRF # {{$serviceModal2->srf_no}}</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        

      <div class="form-group col-md-12">
            <label for="inputState">Order number: </label>
            <input type="text" name="ornum"> 
        </div>
        <div class="form-group col-md-12">
            <label for="inputState">Items (One stock per select)</label>
            <div id="iteminventorybody{{$serviceModal2->service_id}}">
                <div id="append{{$serviceModal2->service_id}}">
                    <div class="row">
                        <div class="col-md-12">
                            <select id="iteminventory" name="iteminventory[]" style="width: 100%" required>
                                <option value="">&nbsp;</option>
                                @foreach($inventories as $inventory)
                                  @if($inventory->inventory_status == 'Available')
                                <option value="{{$inventory->inventory_id}}"> {{$inventory->inventory_item}}</option>
                                  @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <button onclick="additems({{$serviceModal2->service_id}})" id="additem" type="button" class="btn btn-success btn-sm"> Add Item + </button>
          </div>
          <div class="col-md-4">
            <button onclick="deleteitems({{$serviceModal2->service_id}})" id="additem" type="button" class="btn btn-danger btn-sm"> Delete Item - </button>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <input hidden name="service-id" value="{{$serviceModal2->service_id}}">
        <input hidden name="client-id" value="{{$serviceModal2->client_id}}">
        <input hidden name="srf-no" value="{{$serviceModal2->srf_no}}">

        <a href="/myservices" class="btn btn-default">Cancel</a>
        <button type="submit" class="btn btn-success"> Order Part/s </button>
      </div>
    </div>
  </div>
</div>
</form>
@endforeach