<?php

namespace App\Http\Controllers;

use App\InventoryModel;
use Helper;
use Illuminate\Http\Request;
use App\SummaryModel;

class InventoryController extends Controller
{
    //
    public function index() 
    {
        $currentUser = Helper::staticInfo();
        $inventories = InventoryModel::groupBy('inventory_item')->where('inventory_status', '=', 'Available')->get();

        return view('client_module.inventory', compact('currentUser', 'inventories'));
    }

    public function filter(Request $request)
    {
        $filter = $request->input('filter');

        if($filter == 'all') {
            $inventories = InventoryModel::all();
        }else{
            $inventories = InventoryModel::where('inventory_status', '=', $filter)->get();
        }

        $currentUser = Helper::staticInfo();

        return view('client_module.inventory', compact('currentUser', 'inventories'));


    }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {

    //     date_default_timezone_set('Asia/Manila');
    //     $summary = new SummaryModel;
    //     $summary->summary_or = $request->input('or');
    //     $summary->summary_contact = $request->input('contact');
    //     $summary->summary_fname = $request->input('fname');
    //     $summary->summary_lname = $request->input('lname');
    //     $summary->summary_motherboard = $request->input('motherboard');
    //     $summary->summary_processor = $request->input('processor');
    //     $summary->summary_memory = $request->input('memory');
    //     $summary->summary_graphics = $request->input('graphics');
    //     $summary->summary_os = $request->input('os');
    //     $summary->summary_office = $request->input('office');
    //     $summary->summary_power = $request->input('power');
    //     $summary->summary_cooling = $request->input('cooling');
    //     $summary->summary_fan = $request->input('fan');
    //     $summary->summary_monitor = $request->input('monitor');
    //     $summary->summary_mouse = $request->input('mouse');
    //     $summary->summary_keyboard = $request->input('keyboard');
    //     $summary->summary_headset = $request->input('headset');
    //     $summary->save();
    //     return redirect()->back()->with('success','Added to inventory successfully!',compact('summary'))->withInput();
    // }

    

}
