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
        $admin = User::create([
            'name' => 'admin',
            'email' => 'superadmin123@gmail.com',
            'password' => Hash::make('superadmin123'),
        ]);

        $roleAdmin = Role::create(['name' => 'admin']);

        $admin->assignRole($roleAdmin);
    }
}
