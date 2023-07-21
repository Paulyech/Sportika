<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //show register form
    public function create(){
        return view('users.register');
    }

    // create new user 
    public function store(request $request){
        
        $formFields = $request-> validate([
            'name'=> ['required','min:3'],
            'email'=> ['required','email',Rule::unique('users','email')],
            'password' => 'required|confirmed|min:6',
        ]);

        // hash password 
        $formFields ['password'] = bcrypt($formFields['password']);
         
        // create user 
        $user = User::create($formFields);

        // login 
        auth()->login($user);
        return redirect('/')->with('message','User created and logged in successfully');

    }

    // logout user 
    public function logout(request $request){

        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerate();

        return redirect('/')->with('message','You have been logged out');


    }
}