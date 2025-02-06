<?php

namespace App\Http\Controllers;
use App\Models\administrator;
use Illuminate\Http\Request;

class listUser extends Controller
{
    public function index()
    {
        $admin = administrator::all();
        return view('admin', compact('admin'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'User' => 'required|unique:administrator,User',
            'Password' => 'required|min:5',
            'admin_type' => 'required'
        ]);

        $simpan = administrator::create([
            'User' => $request->User,
            'Password' => $request->Password, // Gunakan bcrypt untuk keamanan
            'admin_type' => $request->admin_type
        ]);

        if ($simpan) {
            alert()->success('Data berhasil disimpan!', 'Berhasil!');
            return redirect('/admin');
        } else {
            alert()->error('Data gagal disimpan!', 'Gagal!');
            return redirect('/');
        }
    }



}

