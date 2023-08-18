<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\admin;
use Illuminate\Support\Facades\Hash;

class AdminAuth extends Controller
{       
    public function adminLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $user = DB::table('admins')->where('username', $username)->first();
        if ($user && password_verify($password, $user->password)){
            $data= $request->input();
            $request->session()->put('username',$data['username']);
            return redirect('adpage');
        }else{
            return redirect()->back()->with('error', 'Invalid username or password');
        }
    }
}