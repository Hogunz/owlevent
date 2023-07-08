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

        //Admin Role
        $roleAdmin = Role::create(['name' => 'Admin']);
        $admin = User::create([
            'name' => 'admin',
            'email' => 'superadmin123@gmail.com',
            'password' => Hash::make('superadmin123'),
        ]);
        $admin->assignRole($roleAdmin);

        //Supplier Role
        $roleSupplier = Role::create(['name' => 'Supplier']);
        $supplier =  User::create([
            'name' => 'supplier',
            'email' => 'supplier@gmail.com',
            'password' => Hash::make('supplier123'),
        ]);
        $supplier->assignRole($roleSupplier);

        //Writer Role
        $roleWriter = Role::create(['name' => 'Writer']);
        $writer = User::create([
            'name' => 'writer',
            'email' => 'writer@gmail.com',
            'password' => Hash::make('writer123'),
        ]);
        $writer->assignRole($roleWriter);

        //Operations Role
        $roleOperations = Role::create(['name' => 'Operations']);
        $operations = User::create([
            'name' => 'operations',
            'email' => 'operations@gmail.com',
            'password' => Hash::make('operations123'),
        ]);
        $operations->assignRole($roleOperations);
    }
}
