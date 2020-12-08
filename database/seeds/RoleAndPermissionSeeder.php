<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'Administrador']);
        Role::create(['name' => 'Operador']);
        User::create([
            'name'          => 'admin',
            'password'      => bcrypt('admin'),
        ]);
        $user = User::find(1);
        $user->assignRole('Administrador');

        /***** -- Usuarios -- *****/
        Permission::create(['name' => 'users.index']);
        Permission::create(['name' => 'users.create']);
        Permission::create(['name' => 'users.show']);
        Permission::create(['name' => 'users.edit']);
        Permission::create(['name' => 'users.destroy']);
        Permission::create(['name' => 'users.password']);

        /***** -- Roles -- *****/
        Permission::create(['name' => 'roles.index']);
        Permission::create(['name' => 'roles.create']);
        Permission::create(['name' => 'roles.show']);
        Permission::create(['name' => 'roles.edit']);
        Permission::create(['name' => 'roles.destroy']);
        Permission::create(['name' => 'roles.store']);
        Permission::create(['name' => 'roles.update']);

        /***** -- Invoces -- *****/
        Permission::create(['name' => 'invoces.index']);
        Permission::create(['name' => 'invoces.create']);
        Permission::create(['name' => 'invoces.show']);
        Permission::create(['name' => 'invoces.edit']);
        Permission::create(['name' => 'invoces.destroy']);
        Permission::create(['name' => 'invoces.store']);
        Permission::create(['name' => 'invoces.update']);

        /***** -- Restaurants -- *****/
        Permission::create(['name' => 'restaurants.index']);
        Permission::create(['name' => 'restaurants.show']);
        Permission::create(['name' => 'restaurants.edit']);
        Permission::create(['name' => 'restaurants.destroy']);
    }
}
