<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Récupérer le rôle admin existant
        $adminRole = Role::where('name', 'admin')->first();

        if (!$adminRole) {
            // Si le rôle admin n'existe pas, on le crée ici
            $adminRole = Role::create(['name' => 'admin']);
        }

        // Default credentials
        $adminUser = User::create([
            'name' => 'DJAZI',
            'identifiant' => 'Djazi12',
            'identifiant_verified_at' => now(),
            'password' => Hash::make('123456'), // password
            'gender' => 'male',
            'active' => 1,
            'remember_token' => Str::random(10)
        ]);

        $adminUser->assignRole($adminRole);

        // Fake users
        // User::factory()->times(9)->create();
    }
}
