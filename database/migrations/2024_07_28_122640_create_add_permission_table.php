<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create roles
        $adminRole = Role::create(['name' => 'admin']);
        $managerRole = Role::create(['name' => 'manager']);
       //  $accountOfficerRole = Role::create(['name' => 'account_officer']);

        // Create permissions
        Permission::create(['name' => 'supervise activities']);
        Permission::create(['name' => 'manage users']);
        Permission::create(['name' => 'generate reports']);
        Permission::create(['name' => 'view all accounts']);

        // Assign permissions to roles
        $adminRole->givePermissionTo(['supervise activities', 'manage users', 'generate reports', 'view all accounts']);
        $managerRole->givePermissionTo(['supervise activities', 'view all accounts']);
       //  $accountOfficerRole->givePermissionTo('view all accounts');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_permission');
         // Remove roles and permissions
         Role::findByName('admin')->delete();
         Role::findByName('manager')->delete();
         // Role::findByName('account_officer')->delete();
         Permission::findByName('supervise activities')->delete();
         Permission::findByName('manage users')->delete();
         Permission::findByName('generate reports')->delete();
         Permission::findByName('view all accounts')->delete();
    }
};
