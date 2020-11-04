<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\createUserMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Mail;
use App\User;

class UserCreateController extends Controller
{
    //
    public function createUser()
    {
        return view('manager/createUser');
    }

    public function send(Request $request)
    {
        $urls = [
                "createUser" => URL::temporarySignedRoute(
                   'user.register',
                   now()->addMinutes(30),
                   ['from' => Auth::user()->name]
                ),
            ];
        $manager = Auth::user();

        $mail = new createUserMail($request, $urls, $manager);
        Mail::to($request->email)->send($mail);
        return view('manager/thanks');
        
    }

    public function register(Request $request)
    {
        // リンクの検証
        if (!$request->hasValidSignature()) {
            return redirect()->route('invalid');
        }
        return view('auth/register');
    }

    public function invalid()
    {
        return 'invalid';
    }
}
