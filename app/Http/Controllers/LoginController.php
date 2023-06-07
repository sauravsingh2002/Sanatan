<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function login(){
        return view('login');
    }

    public function rigester(){
        return view('rigester');
    }

    public function signup(){
        // in sign up time


        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::create(request(['name', 'email', 'password']));

        auth()->login($user);

        // return redirect()->to('login');


        return view('login');
    }


    public function signin(){
        return view('sign_up');
    }


    public function forgotpassword(){
        return view('forgotpassword');
    }

}
