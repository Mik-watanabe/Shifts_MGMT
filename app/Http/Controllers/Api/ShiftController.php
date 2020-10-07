<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shift;

class ShiftController extends Controller
{
    //
    public function index(Request $request) 
   {
    //     Shift::create([
    //         "user_id" => Auth::user()->id,
    //         "shift_date" => $request->date,
    //         "shift_start" => $request->start,
    //         "shift_end" => $request->end

    //     ]);
    $shifts = Shift::all();
         return view('users/shifts',[
             'shifts' => $shifts
         ]);
        // return response()->json($request->get('start'));
        
    }
}
