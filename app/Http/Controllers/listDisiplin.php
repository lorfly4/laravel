<?php

namespace App\Http\Controllers;
use App\Models\disiplin;

use Illuminate\Http\Request;

class listDisiplin extends Controller
{
    public function index(){
        $data = disiplin::all();
        return view('admin', compact('data'));
    }    
}
