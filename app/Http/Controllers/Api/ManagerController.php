<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Mail;
use App\Models\Shift;
use App\User;

class ManagerController extends Controller
{
  
    public function showShifts(Request $request)
    {
     $shifts = Shift::all();

      $showShifts = [];
      foreach($shifts as $shift){

        $date = $shift->shift_date;
        $newItem = [
            'title' => $shift->user->name,
            'date' => $date,
            'start' => $date.' '.$shift->shift_start,
            'end' => $date.' '.$shift->shift_end, 
            'backgroundColor' => $shift->user->color,    
        ];

        $showShifts[] = $newItem;
      }

       return response()->json($showShifts);
    }

}


