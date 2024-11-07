<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;


class LoginController extends Controller
{
    public function index(){
        return view('login.index', [
            "title" => "Login"
        ]);
    }

    public function authenticate(Request $request){
        try {
            $credentials = $request->validate([
                "email" => "required|email:dns",
                "password" => "required"
            ]);
            if(Auth::attempt($credentials)){
                $request->session()->regenerate();
                return redirect()->intended('/dashboard');
            }
            return back()->with('loginError', 'Login gagal, silakan coba lagi.');
        }catch (ValidationException $e) {
            return back()->with('loginError', 'Login gagal, silakan coba lagi.');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

}
