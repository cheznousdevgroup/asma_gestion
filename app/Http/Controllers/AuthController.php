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

             // Récupérer le nom de l'utilisateur
            $userName = Auth::user()->name;

            // Rediriger vers la page d'accueil avec un message de succès
            return redirect()->route('home')->with('success', 'Bonjour ' . $userName . ', vous êtes maintenant connecté a votre espace.');
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
