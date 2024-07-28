<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserRepository implements UserRepositoryInterface
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }
    public function getAll($search = null, $pagine = 10)
    {
        $query = User::query();
        if ($search) {
            $query->where(function ($query) use ($search) {
                $query->where("name","like","%".$search."%")
                ->Orwhere("email","like","%".$search."%");

        });
    }
    // Ajout le tri par created_at
    $query->orderByDesc('created_at');

    return $query->paginate($pagine);
    }

    public function getById($id)
    {
        return User::findOrFail($id);
    }

    public function create(array $data)
    {
        // Gestion de l'image de profil
        if (isset($data['photo'])) {
            $photoPath = $data['photo']->store('profile_photos', 'public');
        } else {
            $photoPath = null;
        }

        $user = User::create([
            'name' => $data['name'],
            'identifiant' => $data['identifiant'],
            'password' => Hash::make($data['password']),
            'photo' => $photoPath,
            'identifiant_verified_at' => now(),
            'remember_token' => Str::random(10),
            'active' => 1,
            'gender' => $data['gender'],
        ]);

        if (isset($data['roles'])) {
            // Vérifie que les rôles existent avant de les synchroniser
            $existingRoles = Role::whereIn('name', $data['roles'])->pluck('name')->toArray();
            $user->syncRoles($existingRoles);
        }

        return $user;
    }

    public function update($user, array $data)
    {
        // Gestion de l'image de profil
        if (isset($data['photo'])) {
            // Supprimer l'ancienne photo si elle existe
            if ($user->photo && Storage::disk('public')->exists($user->photo)) {
                Storage::disk('public')->delete($user->photo);
            }
            $photoPath = $data['photo']->store('profile_photos', 'public');
        } else {
            $photoPath = $user->photo; // Sinon il prend la photo existant
        }

        $user->update([
            'name' => $data['name'],
            'identifiant' => $data['identifiant'],
            'gender' => $data['gender'],
            'photo' => $photoPath,
        ]);

        if (isset($data['roles'])) {
            // Vérifie que les rôles existent avant de les synchroniser
            $existingRoles = Role::whereIn('name', $data['roles'])->pluck('name')->toArray();
            $user->syncRoles($existingRoles);
        }

        return $user;
    }

    public function delete($id)
    {
        return User::destroy($id);
    }
}
