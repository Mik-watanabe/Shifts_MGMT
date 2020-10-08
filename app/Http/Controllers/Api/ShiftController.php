<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Shift;

class ShiftController extends Controller
{
    //データをデータベースから取得している
    public function index(Request $request) 
   {
        $shifts = Shift::all();
        $user = Auth::user();
        $newArr = [];
        
       
        foreach($shifts as $shift){
           
           if($user->id === $shift["user_id"]){
           $newItem["date"] = $shift["shift_date"];
           $newItem["start"] = $shift["shift_start"];
           $newItem["end"] = $shift["shift_end"];
           $newArr[] = $newItem;

            }
           
        }
        return response()->json($newArr); 
    }
    // データをデータベースへ送信
    public function addEvent(Request $request)
    {
        $data = $request->all();
        $event = new Shift();
        $event->user_id = Auth::id();
        $event->shift_date = $data['date'];
        $event->shift_start = $data['start'];
        $event->shift_end = $data['end'];
        $event->save();

        return response()->json($event);
    }
}
