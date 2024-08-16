<?php

use Illuminate\Support\Facades\Route;


// Import Controllers
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\UserControllerRoute;
use App\Http\Controllers\Http_request;
use App\Http\Controllers\UserControllerSession;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\StudentController;

Route::get('user',[Usercontroller::class,'getUser']);
Route::get('about',[Usercontroller::class,'aboutUser']);
Route::get('callview',[Usercontroller::class,'callView']);
Route::get('admin',[Usercontroller::class,'adminLogin']);


Route::get('/', function () {
    return view('welcome');
});

// ================== Long Method ===============
Route::get('/home', function () {
    return view('home');
});

// ================ Short Method (Direct view open krne k liye)===============
// Route::view('/home', 'home'); // second parameter m page pass krna h.

// ==================== Pass Data with Routes =================
Route::get('/about/{name}', function ($name) {
    echo $name;
    return view('about',['name'=>$name]);
});

Route::view('user-form','user-form');

Route::post('adduser',[Usercontroller::class,'addUser']);

Route::view('middleware','middleware_view');
Route::view('middleware-about','middleware_about');


Route::get('users',[Usercontroller::class,'users']);

// ================= Route ========================
// Route::get('user-route',[UserControllerRoute::class,'get']);
// Route::post('user-route',[UserControllerRoute::class,'post']);
// Route::put('user-route',[UserControllerRoute::class,'put']);
// Route::delete('user-route',[UserControllerRoute::class,'delete']);
// Route::view('form','userRoute'); 

// ================= Route Function Any or Match ========================
// Route::get('user-route-any',[UserControllerRoute::class,'any']);
// Route::post('user-route-any',[UserControllerRoute::class,'any']);
// Route::put('user-route-any',[UserControllerRoute::class,'any']);
// Route::delete('user-route-any',[UserControllerRoute::class,'any']);
// Upser wale 4 ko agr 1 krna h to niche wale route ko ek dafa likhen bt same h, or us k liye any use krte hn, kun k any sare k sare routes pe aik hi method call kr deta h.


// Route::any('user-route-any',[UserControllerRoute::class,'any']);

// Route::view('form','userRoute'); 

// Ab Ham Chahte hn k 2 pe same route use ho or 2 pe same, or us k liye ham match use krte hn.


//Route::match(['post','get'],'user-match', [UserControllerRoute::class,'group1']); // post or get method pe same route call ho user-match wala.

Route::match(['put','delete'],'user-match', [UserControllerRoute::class,'group2']);


Route::view('form','userRoute'); 

// ============================ HTTP Request ===========================

Route::view('http-request','http_request'); 
Route::post('http-request',[Http_request::class,'login']);

// ======================= Session ===================
Route::view('login','login');
Route::view('profile','profile');

Route::post('login',[UserControllerSession::class,'login']);
Route::get('logout',[UserControllerSession::class,'logout']);

// ================== Upload File =================
Route::view('upload','upload');
Route::post('upload',[UploadController::class,'upload']);

// =====================  Insert data in MySQL table with html form ===============
Route::view('add-student','add-student');
Route::post('add-student',[StudentController::class,'addStudent']);

// =====================  Show data From MySQL table ===============
Route::get('list',[StudentController::class,'list']);

// ===================== Delete data from MySql Table ===============
Route::get('delete/{id}',[StudentController::class,'deleteStudent']);

// ===================== Display and Update data from MySql Table ===============
Route::get('edit/{id}',[StudentController::class,'edit']);

Route::put('edit-student/{id}',[StudentController::class,'editStudent']);