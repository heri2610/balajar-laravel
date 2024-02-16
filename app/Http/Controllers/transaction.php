<?php

namespace App\Http\Controllers;

use App\Models\karyawan;
use Illuminate\Http\Request;

class transaction extends Controller
{
    function index(){
        // @dd(karyawan::all()->toJson());
        // var_dump(karyawan::all()->toJson());
        die();
        return view('welcome', [
            'karyawan' => karyawan::all()
        ]);
    }
}

