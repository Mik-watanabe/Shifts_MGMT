<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public function index()
    {
        // $user = User::find($id);

       return view('users/index');
    }

    // public function setEvents(Request $request){

    //     $start = $this->formatDate($request->all()['start']);
    //     $end = $this->formatDate($request->all()['end']);

    //     $events = Event::select('id', 'title','date')->whereBetween('date',[$start,$end])->get();
    // }


}
