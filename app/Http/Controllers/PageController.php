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
        return view('pages.home');
    }
}
