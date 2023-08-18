<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\RegistersExport;

class RegisterController extends Controller
{

    public function index()
    {
        $registers = Register::all();

        return view('reginfo', compact('registers'));
    }
    function storeData(Request $request)
    {
        $register = new Register;
        $register->name=$request->name;
        $register->usn=$request->usn;
        $register->sem=$request->sem;
        $register->branch=$request->branch;
        $register->phone=$request->phone;
        $register->hobbies=$request->hobbies;
        $register->clubs=$request->clubs;
        $register->reasons=$request->reasons;
        $register->save();
        return redirect()->back()->with('status', 'Registered successfully!!');
    }
    public function exportExcel()
    {
        return Excel::download(new RegistersExport, 'registers.xlsx');
    }
}
