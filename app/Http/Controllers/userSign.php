<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\admin;

class userSign extends Controller
{
    //
    
    function storeData(Request $request)
    {
        $event = new admin;
        $event->name=$request->name;
        $event->username=$request->username;
        $event->password = Hash::make($request->password);
        $event->save();
        return redirect('index');
}

}
//Routes
/*Route::view("register",'register');

Route::post("dashboard",[user::class,'storeData']);*/