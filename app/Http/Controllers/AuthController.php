<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        $credentials = $request->validate([
            'identifiant' => 'required|string',
            'password' => 'required|string'
        ]);

        // dd($credentials);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return to_route('home');
        }
        return back()->with([
            'error' => 'Identifiant ou mot de passe incorrect'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return to_route('login');
    }

}
