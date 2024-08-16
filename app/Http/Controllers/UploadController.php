<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    function upload(Request $req){
        // echo "Upload Function Called";
        $path = $req->file('file')->store('public'); // create random file name and save file into public folder, or extention apne ap utha leta h. 
        // ab is file ko UI m show krwane k liye pehle is ko public/link krna pare ga, or us ki command h php artisan storage:link, kun k is command k bager file open nhi hogi kisi page pe.
        // public/Bjxmgj1CQ3wsiNcoD8DN7VjZhsJwZGZLSAFEjUC5.jpg (is tarh file ka name bne ga public folder k ander).
        $filenameArray = explode("/", $path);
        $fileName = $filenameArray[1]; 
        return view('displayImage',['path'=>$fileName]);
    }
}
