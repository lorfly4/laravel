<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\administrator;

class LoginUser extends Controller
{
    /**
     * Menyimpan data login ke dalam session
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $credentials = $request->only('User', 'password');

        // Menyeleksi data user dengan username dan password yang sesuai
        $user = administrator::where('User', $credentials['User'])->first();

        // Cek apakah user ditemukan dan passwordnya sesuai
        if ($user && $user->password == $credentials['password']) {
            // Set session user
            Session::put('User', $user->User);
            Session::put('admin_type', $user->admin_type);
            Session::put('login', TRUE);

            // Redirect sesuai admin_type
            if ($user->admin_type == 'admin') {
                return redirect('/admin');
            } elseif ($user->admin_type == 'guest') {
                return redirect('/guest');
            } else {
                return redirect('/')->with('alert', 'Anda tidak memiliki akses sebagai ' . $user->admin_type);
            }
        } else {
            return redirect('/')->with('alert', 'Username dan Password tidak sesuai');
        }
    }
}

