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
use App\ChargeInvoiceModel;

class FormChargeInvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currentUser = Helper::staticInfo();
        $employee = DB::table('users')->select(\DB::raw('CONCAT(first_name, " ",last_name) AS Name'))->get();
        return view('Admin.formInvoice',compact('currentUser','employee'));
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
            'date' => 'required',
            'receipt'=> 'required',
            'entity' => 'required',
            'employee' => 'required',
            'po_no' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'unit_price' => 'required',
            'quantity' => 'required',
            

        ]);

            if ($validator->fails()) {
            Session::flash('error', $validator->messages()->first());
            return redirect()->back()->withInput();
       }

        date_default_timezone_set('Asia/Manila');
        $chargeInvoice = new ChargeInvoiceModel;
        
        $chargeInvoice->date = $request->input('date');
        $chargeInvoice->charge_no = $request->input('receipt');
        $chargeInvoice->entity = $request->input('entity');
        $chargeInvoice->person_incharge = $request->input('employee');
        $chargeInvoice->po_no = $request->input('po_no');
        $chargeInvoice->brand = $request->input('brand');
        $chargeInvoice->model = $request->input('model');
        $chargeInvoice->unit_price = $request->input('unit_price');
        $chargeInvoice->qty = $request->input('quantity');
        $chargeInvoice->save();
        return redirect()->back()->with('success','Added to inventory successfully!',compact('inventory'))->withInput();
    }

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
