<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function login(){
        return view('authentication\login');
    }
    function loginPost(Request $request){
        $request->validate([
            "email" => "required",
            "password" => "required",
        ]);
        $credentials = $request->only("email", "password");
        if(Auth::attempt($credentials)){
            return redirect()->intended(route("home"));
        }
        return redirect(route("login"))->with("error", "Login failed");
    } 

    function register(){
        return view('authentication\register');
    }

    function registerPost(Request $request){
        $request->validate([
            "Fullname" => "required",
            "email" => "required",
            "password" => "required",
        ]);
        $user = new User();
        $user->name = $request->Fullname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if($user->save()){
            return redirect(route('login'))->with("success","User created successfully");
        }
        return redirect(route("register"))->with("error","Failed to create account");
    }
}
