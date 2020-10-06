<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shift;
use Illuminate\Support\Facades\Auth;

class ShiftController extends Controller
{
    //
    public function setEvents(Request $request) 
    {
        Shift::create([
            "user_id" => Auth::user()->id,
            "shift_date" => $request->date,
            "shift_start" => $request->start,
            "shift_end" => $request->end

        ]);
         
        return response()->json($request->get('start'));
        
        
        // $start = $this->formatDate($request->all()['start']);
        // $end = $this->formatDate($request->all()['end']);

        // $events = Shift::get();

        // $newArr = [];
        // foreach($events as $item){
        //     $newItem["id"] = $item["id"];
        //     $newItem["start"] = $item["shift_date"];
        //     $newItem["start"] = $item["shift_start"];
        //     $newItem["end"] = $item["shift_end"];
        //     $newItem[] = $newItem;
        // }

        // echo json_encode($newArr);
    }
    public function formatDate($date){
        return str_replace('T00:00:00+09:00', '', $date);
    }
}
