<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Session;
use DateTime;
use App\InventoryModel;
use Helper;
use App\SupplierModel;
use Carbon\Carbon;
use DB;
use App\Inventory;
class InventoryAddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = DB::table('supplier')->get();
        $currentUser = Helper::staticInfo();
        return view('Admin.adminAddInventory',compact('currentUser','suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
                 $validator = Validator::make($request->all(), [
            // 'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:4090',
            'item'=> 'required',
            'brand' => 'required',
            'model' => 'required',
            'psocket' => 'required',
            'socket' => 'required',
            'inventory_serial_no' => 'required|unique:inventory',
            'cost' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'supplierName' => 'required',
            'date' => 'required',
            

        ]);

            if ($validator->fails()) {
            Session::flash('error', $validator->messages()->first());
            return redirect()->back()->withInput();
       }

        date_default_timezone_set('Asia/Manila');
        $inventory = new InventoryModel;
        $inventory->inventory_item = $request->input('item');
        $inventory->inventory_type = $request->input('item');
        $inventory->inventory_brand = $request->input('brand');
        $inventory->inventory_model = $request->input('model');
        $inventory->processor_socket = $request->input('psocket');
        $inventory->inventory_socket = $request->input('socket');
        $inventory->inventory_serial_no = $request->input('inventory_serial_no');
        $inventory->cost = $request->input('cost');
        $inventory->inventory_supplier = $request->input('supplierName');
        $inventory->date_received = $request->input('date');
        $inventory->save();
        return redirect()->back()->with('success','Added to inventory successfully!',compact('inventory'))->withInput();
        
    }

//     public function edit($id)
// {
//   $suppliers = DB::table('supplier')->lists('supplier_name'); 
//   return view('Admin.adminAddInventory', ['suppliers' => $suppliers]);
// }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
