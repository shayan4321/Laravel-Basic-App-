<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControllerSession extends Controller
{
    //
    function login(Request $req){
        // return "Login Function";
        // return $req->input();
        // return $req->input('user');
        $req->session()->put('user', $req->input('user')); // store user value in session.
        //echo session('user');
        $req->session()->put('allData', $req->input());
        return redirect('profile');
    }

    function logout(){
        session()->pull('user'); // remove user in my app.
        return redirect('profile');
    }
}
