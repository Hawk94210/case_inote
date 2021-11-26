<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if ($request->check = 'check') {
            $check = true;
        }else{
            $check = false;
        }
        if (Auth::attempt($data,$check)) {
            return redirect()->route('show.index');
        }
            return back()->withInput()->with('errors','Tài khoản hoặc mật khẩu không đúng!!');
    }
}
