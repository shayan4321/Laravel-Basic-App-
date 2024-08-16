<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControllerRoute extends Controller
{
    function get(Request $req){
        return $req;
    }
    function post(Request $req){
        return "Post Route Method";
        // return $req;
    }
    function put(){
        return "Put Route Method";
        // return $req;
    }
    function delete(){
        return "Delete Route Method";
        // return $req;
    }
    function any(){
        return "This is Any Method";
        // return $req;
    }
    function group1(){
        return "This is Group 1";
        // return $req;
    }
    function group2(){
        return "This is Group 2";
        // return $req;
    }
}
