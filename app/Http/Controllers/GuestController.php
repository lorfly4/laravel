<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    function index(){
        echo "Selamat Datang";
        echo "<h1>". Auth::user()->User."</h1>";
        echo "<br><a href='logout'>Logout</a>";
    }
}
