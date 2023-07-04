<?php

namespace Database\Seeders;

use Hash;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = Role::create(['name' => 'Admin']);
        $roleSupplier = Role::create(['name' => 'Supplier']);
        Role::create(['name' => 'Writer']);
        Role::create(['name' => 'Operations']);

        $admin = User::create([
            'name' => 'admin',
            'email' => 'superadmin123@gmail.com',
            'password' => Hash::make('superadmin123'),
        ]);

        $admin->assignRole($roleAdmin);

        $supplier =  User::create([
            'name' => 'supplier',
            'email' => 'supplier@gmail.com',
            'password' => Hash::make('supplier123'),
        ]);

        $supplier->assignRole($roleSupplier);
    }
}
