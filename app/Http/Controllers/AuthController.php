<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Response;

class AuthController extends Controller
{
    function index(){
        return view('auth/login');
    }

    function doLogin(Request $request){
        $validated = $request->validate([
            'email'     => ['required', 'string', 'email'],
            'password'  => ['required']
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();

            return Response::json([
                "status"    => "berhasil",
                "pesan"     => "Login berhasil",
                "authData"  => auth()->user()
            ]);
        };

        return Response::json([
            "status"    => "gagal",
            "pesan"     => "Username atau password salah"
        ]);
    }
    function doLogout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
