<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class RegisterController extends Controller
{
    public function index( )
    {

return view('register.register');

    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required','min:3','max:255','unique:users'],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255'
        ]);
        

        User::create($validatedData);
        // session()->flash('success', 'Registration Successfull! Please Login');
        return redirect('/login')->with('success', 'Registration Successfull! Please Login');
    }
}
