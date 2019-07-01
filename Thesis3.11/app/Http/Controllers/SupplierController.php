<?php

namespace App\Http\Controllers;
use Auth;
use Helper;
use App\SupplierModel;
use App\ServicesModel;
use PDF;
use DB;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $currentUser = Helper::staticInfo();
        $posts = $users = DB::table('supplier')
            ->select('supplier_id','supplier_name','supplier_address','supplier_contactno', 'supplier_contactperson')
            ->get();
        return view('Admin.supplier', compact('currentUser','posts'));

    }

}
