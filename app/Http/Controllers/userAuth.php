<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\user;
use Illuminate\Support\Facades\Hash;

class userAuth extends Controller
{       
    public function userLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $user = DB::table('users')->where('username', $username)->first();
        if ($user && password_verify($password, $user->password)){
            $data= $request->input();
            $request->session()->put('username',$data['username']);
            return redirect('index');
        }else{
            return redirect()->back()->with('error', 'Invalid username or password');
        }
    }
}
