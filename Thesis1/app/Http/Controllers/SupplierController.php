<?php

namespace App\Http\Controllers;
use Auth;
use Helper;
use App\InventoryModel;
use App\ServicesModel;
use PDF;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $currentUser = Helper::staticInfo();
        return view('Admin.supplier', compact('currentUser'));
    }
}
