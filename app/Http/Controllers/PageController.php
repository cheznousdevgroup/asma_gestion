<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Repositories\UserRepository;
use Spatie\Permission\Models\Role;

class PageController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository){
        $this->userRepository = $userRepository;
    }

    public function index(){
        // User::create([
        //     'name' => 'Djazi',
        //     'identifiant' => 'Djazi12',
        //     'password' => Hash::make('123456'),
        //     'gender' => 'male',
        //     'active' => 1,
        //     'remember_token' => Str::random(10)
        // ]);
        return view('auth.login');
    }
    public function home(){
        $users = User::all();
        return view('pages.home', compact('users'));
    }

    public function usersProfils($id)
    {

        $user = $this->userRepository->getById($id);
        return view('partials/employee-management', compact('user'));
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addUserRules()
    {
        $roles = Role::all();
        return view('pages.add-users-rules', compact('roles'));
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function editUserRules($id)
    {
        $user = $this->userRepository->getById($id);
        $roles = Role::all();
        return view('pages.edit-users-rules', compact('user','roles'));
    }
}
