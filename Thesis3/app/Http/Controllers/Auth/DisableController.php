<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;
use DateTime;
use Carbon\Carbon;
use Session;
use Helper;
use Auth;
use DB;
class DisableController extends Controller
{
    public function disable(Request $request)
    {

        // DB::table('users')->where('user_id', $request->input('us_in'))->delete();
        // return redirect()->route('settings');

        date_default_timezone_set('Asia/Manila');
        $newStatus = $request->input('disable');

        DB::table('users')->where('user_id', '=', Auth::user()->user_id)
        ->update([
            'status' => $newStatus,
            'updated_at' => Carbon::now()
        ]);

                return redirect('/settings');
    }
}