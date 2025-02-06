<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class sesiController extends Controller
{
    function index()
    {
        return view('home');
    }

    function login(Request $request)
    {
        $request->validate([
            'fusername' => 'required',
            'fpassword' => 'required',
        ], [
            'fusername.required' => 'Username harus diisi',
            'fpassword.required' => 'Password harus diisi'
        ]);

        $ceklogin = [
            'users' => $request->fusername,
            'password' => $request->fpassword,
        ];

        if (Auth::attempt($ceklogin)) {
            // echo "sukses";
            // exit();

            $user = Auth::user();
            if ($user->admin_type == 'admin') {
                return redirect('/admin');
            } elseif ($user->admin_type == 'guest') {
                return redirect('/guest');
            }
        } else {
            return redirect('/')->withErrors('user dan password salah')->withInput();
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        return redirect('/');
    }
}
