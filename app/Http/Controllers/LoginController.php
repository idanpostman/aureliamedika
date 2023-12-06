<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index( )
    {

return view('login.login');

    }

    public function authenticate(Request $request)
    {

        $credentials = $request->validate([
            'email'=> 'required|email:dns',
            'password' => 'required',
        ]);

       
        if(Auth::attempt($credentials)){
            if (Auth::user()->role == 'admin'){
                return redirect('/dashboard');
            } elseif (Auth::user()->role == 'user'){
                return redirect('/');
            }
        }

        return back()->with('loginError','Login failed!');

    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

}
