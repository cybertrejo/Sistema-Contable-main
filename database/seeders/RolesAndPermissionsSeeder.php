<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;
use App\Models\User;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);

        $createUsersPermission = Permission::create(['name' => 'create-users']);
        $editUsersPermission = Permission::create(['name' => 'edit-users']);
        $deleteUsersPermission = Permission::create(['name' => 'delete-users']);

        $adminRole->permissions()->attach([$createUsersPermission->id, $editUsersPermission->id, $deleteUsersPermission->id]);

        $user = User::find(1); // Asigna el primer usuario registrado
        $user->roles()->attach($adminRole);
    }
}
