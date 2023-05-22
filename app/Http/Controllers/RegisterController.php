<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function show(){
        return view('auth.register');
    }

    public function register(RegisterRequest $request){
        $user = User::create($request->validate());

        auth ()->login($user);

        return redirect('/')->with('sukses',"Akun terdaftar");
    }
}
