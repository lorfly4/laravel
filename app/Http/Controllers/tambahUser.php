<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\administrator;

class tambahUser extends Controller
{
    public function store(Request $request)
    {
       $this->validate($request, [
           'User' => 'required',
           'password' => 'required',
           'admin_type' => 'required',
       ]);

       $user = new administrator;
       $user->User = $request->User;
       $user->password = sha1($request->password);
       $user->admin_type = $request->admin_type;
       $user->save();

       return redirect('/admin');
    }
}
