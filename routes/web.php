<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuth;
use App\Http\Controllers\userAuth;
use App\Http\Controllers\EventController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\userSign;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('create', function () {
    return view('create');
});

//Route for admin login
/*Route::get('/adlogin', function () {
    return view('adlogin');
});*/

//Route for admin controller
Route::post("admin",[AdminAuth::class,'adminLogin']);

//Route for admin login or admin page accordingly
Route::get('/adlogin', function () {
    if(session()->has('admin'))
    {
        return redirect('adpage');
    }
    return view('adlogin');
});

//To logout
Route::get('/logout', function () {
    if(session()->has('admin'))
    {
        session()->pull('admin');
    }
    return redirect('adlogin');
});

//event controller
Route::post("adpage",[EventController::class,'storeData']);
//register controller
Route::post("register",[RegisterController::class,'storeData']);


//Route for flc
Route::view("flc",'flc');

//Route for know more
Route::view("knowmore",'knowmore');

//Route for flc controller
Route::get('/flc', [EventController::class, 'index']);
Route::get('/knowmore', [EventController::class, 'index2']);
Route::get('/adpage', [EventController::class, 'index3']);

Route::post("user",[userAuth::class,'userLogin']);
//Route for user login or user page accordingly
Route::get('/login', function () {
    if(session()->has('user'))
    {
        return redirect('index');
    }
    return view('login');
});

//To logout
Route::get('/userlogout', function () {
    if(session()->has('user'))
    {
        session()->pull('user');
    }
    return redirect('login');
});

//for the home page
Route::view("index",'index');
//about flc
Route::view("aboutflc",'aboutflc');

//tech
Route::view("tech",'tech');

//register
Route::view("register",'register');

//reginfo
Route::view("reginfo",'reginfo');

//route for reginfo controller
Route::get('/reginfo', [RegisterController::class, 'index']);
//route to export in excel form
Route::get('/export/excel', [RegisterController::class, 'exportExcel'])->name('export.excel');

//for signup page
Route::view("signup",'signup');
//signup controller
Route::post("userSign",[userSign::class,'storeData']);







