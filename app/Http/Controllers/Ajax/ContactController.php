<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function store() {
        return response()->json([
            'result' => true
        ]);
    }

}
