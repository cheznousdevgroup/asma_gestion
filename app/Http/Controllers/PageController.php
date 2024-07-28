<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class PageController extends Controller
{
    public function index(){
        // User::create([
        //     'name' => 'Djazi',
        //     'identifiant' => 'Djazi12',
        //     'password' => Hash::make('123456')
        // ]);
        return view('auth.login');
    }
    public function home(){
        $users = User::all();
        $fakers = \Faker\Factory::create();
        $fakeData = [];

        // Générer 100 éléments de données fictives
        for ($i = 0; $i < 100; $i++) {
            $fakeData[] = [
                'name' => $fakers->name,
                'email' => $fakers->email,
                'address' => $fakers->address,
            ];
        }

        // Obtenir une partie des données (par exemple, les 10 premiers éléments)
        $slicedData = array_slice($fakeData, 0, 10);

        return view('pages.home', compact('users','fakers','slicedData'));
    }
}
