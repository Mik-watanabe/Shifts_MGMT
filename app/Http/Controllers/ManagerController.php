<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Shift;
use App\User;

class ManagerController extends Controller
{
    //
    public function index()
    {

       return view('manager/index');
    }

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
        ];
        $showShifts[] = $newItem;
      }

       return response()->json($showShifts);
    }
}
