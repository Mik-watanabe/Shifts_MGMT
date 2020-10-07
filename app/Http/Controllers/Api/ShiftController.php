<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Shift;

class ShiftController extends Controller
{
    //
    public function index(Request $request) 
   {
        $shifts = Shift::all();
        $newArr = [];
        
       
        foreach($shifts as $shift){
           
           if(Auth::user()->id === $shift["user_id"]){
           $newItem["date"] = $shift["shift_date"];
           $newItem["start"] = $shift["shift_start"];
           $newItem["end"] = $shift["shift_end"];
           $newArr[] = $newItem;

            }
           
        }
        return response()->json($newArr); 
    }
        // dd($newArr)


        // $shifts = create::get([
        //     "user_id" => Auth::user()->id,
        //     "shift_date" => $request->date,
        //     "shift_start" => $request->start,
        //     "shift_end" => $request->end

        // ]);
        // return response()->json($newArr); 
}


// foreach($events as $item){
//     $newItem["id"] = $item["event_id"];
//     $newItem["title"] = $item["title"];
//     $newItem["start"] = $item["date"];
//     $newArr[] = $newItem;
// }