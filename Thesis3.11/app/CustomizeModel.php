<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Customize extends Model {

   // Fetch departments
   public static function getMotherboard(){

     $value=DB::table('inventory')->orderBy('inventory_id', 'asc')->get(); 

     return $value;
   }

   // Fetch employee by department id
   public static function getinventoryMemory($inventory_id=0){

     $value=DB::table('inventory')->where((
            ->select('inventory_id', 'inventory_item', 'inventory_type', 'processor_socket', 'inventory_socket')
            ->groupBy('inventory_item')
            ->where('inventory_status', '=', 'Available')->where('inventory_type', '=', 'Motherboard')
            ->get();)
            , $inventory_id)->get();

     return $value;
   }

}