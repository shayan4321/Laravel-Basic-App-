<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Usercontroller extends Controller
{
    //
    function getUser(){
        return "Hello Ahmed";
    }
    function aboutUser(){
        return "Hello About";
    }
    // Call View
    function callView(){
        return view('home');
    }
    // Nested views
    function adminLogin(){
        return view('admin.login'); // nested k liye . use krna h.
    }
   
    function addUser(Request $request){
        // return $request;
        echo $request->username;
        echo $request->useremail;
        echo $request->usercity;
        echo $request->city;
        echo $request->gender;
        print_r($request->skill);
    }
    function users(){
        $users =  DB::select('select * from users');
        return view('users',['users'=>$users]);
    }
}
