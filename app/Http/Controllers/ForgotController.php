<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgotController extends Controller
{
    //

    
    public function login(){
        return view('forgotpassword');
    }

}
