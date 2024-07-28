<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Services\UserService;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function assignRole($userId, $roleName)
    {
        $user = User::findOrFail($userId);
        $user->assignRole($roleName);

        return response()->json(['message' => 'Role assigned successfully']);
    }

    // Enregistrer un utilisateur
    public function store(Request $request)
    {

        $data = $request->all();
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo');
        }

        // Supprimer la confirmation de mot de passe, car elle n’est plus nécessaire
        unset($data['password_confirmation']);

        $result = $this->userService->createUser($data);

        if (isset($result['errors'])) {
            return back()->withErrors($result['errors']);
        }

        return redirect()->route('users-rules')->with('success', 'User created successfully.');
    }

    // Mêttre a jour un utilisateur
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $data = $request->all();
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo');
        }

        $result = $this->userService->updateUser($user, $data);

        if (isset($result['errors'])) {
            return back()->withErrors($result['errors']);
        }

        return redirect()->route('users-rules')->with('success', 'User updated successfully.');
    }
}
