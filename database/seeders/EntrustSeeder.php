<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Support\Str;


class EntrustSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::create([
            'name' => 'admin',
            'display_name' => 'Administration',
            'description' => 'Adminstrator',
            'allowed_route' => 'admin',
        ]);
        $supervisorRole = Role::create([
            'name' => 'supervisor',
            'display_name' => 'supervisor',
            'description' => 'Supervisor',
            'allowed_route' => 'admin',
        ]);
        $customerRole = Role::create([
            'name' => 'customer',
            'display_name' => 'customer',
            'description' => 'Customer',
            'allowed_route' => null,
        ]);

        $admin = User::create([
            'first_name' => 'Admin',
            'last_name' => 'System',
            'username' => 'adminUser',
            'phone' => '9665000001',
            'email' => 'admin@ecommerce.test',
            'email_verified_at' => now(),
            'user_image' => 'avatar.svg',
            'status' => 1,
            'password' => bcrypt('password'), // password
            'remember_token' => Str::random(10),
        ]);
        $admin->attachRole($adminRole);

        $supervisor = User::create([
            'first_name' => 'Supervisor',
            'last_name' => 'System',
            'username' => 'supervisorUser',
            'phone' => '9665000002',
            'email' => 'supervisor@ecommerce.test',
            'email_verified_at' => now(),
            'user_image' => 'avatar.svg',
            'status' => 1,
            'password' => bcrypt('password'), // password
            'remember_token' => Str::random(10),
        ]);
        $supervisor->attachRole($supervisorRole);

        $customers = User::factory(20)->create();

        $customers->each(function ($customer) use ($customerRole) { 
            $customer->attachRole($customerRole);
        });

        $manageMain = Permission::create([
            'name' => 'main',
            'display_name' => 'Main',
            'route' => 'index',
            'module' => 'index',
            'as' => 'index',
            'icon' => 'fas fa-home',
            'parent' => '0',
            'parent_original' => '0',
            'sidebar_link' => '1',
            'appear' => '1',
            'ordering' => '1',
        ]);
        $manageMain->parent_show = $manageMain->id;
        $manageMain->save();
        
        $mangeMain = Permission::create([
            'name' => '',
            'display_name' => '',
            'description' => '',
            'route' => '',
            'module' => '',
            'as' => '',
            'icon' => '',
            'parent' => '',
            'parent_show' => '',
            'parent_original' => '',
            'sidebar_link' => '',
            'appear' => '',
            'ordering' => '',
        ]);
    }
}
