<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function getAll()
    {
        return User::all();
    }

    public function getById($id)
    {
        return User::findOrFail($id);
    }

    public function create(array $attributes)
    {
        return User::create($attributes);
    }

    public function update($id, array $attributes)
    {
        return User::where('id', $id)->update($attributes);
    }

    public function delete($id)
    {
        return User::destroy($id);
    }
}
