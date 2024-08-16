<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Http_request extends Controller
{
    function login(Request $request){
        // return "Login Function Called";
        // return $request;
        echo "Request method is ".$request->method(); // check method which method called like post, get etc...
        echo "<br>";

        echo "Request method is ".$request->path(); // check route or path.
        echo "<br>";

        echo "Request url is ".$request->url(); // check full url.
        echo "<br>";

        echo "Name is ".$request->input('name'); // check req field value.
        echo "<br>";

        print_r($request->input());// get every input field value.
        echo "<br>";

        echo "IP is ".$request->ip(); // check IP.
        echo "<br>";

    }
}
