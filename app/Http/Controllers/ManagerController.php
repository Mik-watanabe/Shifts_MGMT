<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ManagerController extends Controller
{
    //
    public function index()
    {

       return view('manager/index');
    }

    public function showUserColor() 
    {
      //マネージャー以外のユーザーを獲得
      $users = User::where('is_manager', 0)->get();

      return view('manager/userColor', ['users' => $users]);
    }

    public function updateUserColor(Request $request)
    {
     $color = $request->favorite_color;
     $id = $request->id;

     User::where('id', $id)->update(['color'=>$color]);
    
     return redirect()->back();

    }
    
}
