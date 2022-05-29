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
        
        // Products Categories
        $manageProductCategories = Permission::create(['name' => 'manage_product_categories','display_name' => 'Categories','route' => 'product_categories','module' => 'product_categories','as' => 'product_categories.index','icon' => 'fas fa-file-archive','parent' => '0','parent_original' => '0','sidebar_link' => '1','appear' => '1','ordering' => '5']);
        $manageProductCategories->parent_show = $manageProductCategories->id; $manageProductCategories->save();
        $showProductCategories = Permission::create(['name' => 'show_product_categories','display_name' => 'Categories','route' => 'product_categories','module' => 'product_categories','as' => 'product_categories.index','icon' => 'fas fa-file-archive','parent' => $manageProductCategories->id,'parent_original' => $manageProductCategories->id,'parent_show' => $manageProductCategories->id,'sidebar_link' => '1','appear' => '1']);
        $createProductCategories = Permission::create(['name' => 'create_product_categories','display_name' => 'Create Category','route' => 'product_categories','module' => 'product_categories','as' => 'product_categories.create','icon' => 'fas fa-plus','parent' => $manageProductCategories->id,'parent_original' => $manageProductCategories->id,'parent_show' => $manageProductCategories->id,'sidebar_link' => '1','appear' => '0']);
        $displayProductCategories = Permission::create(['name' => 'display_product_categories','display_name' => 'Show Category','route' => 'product_categories','module' => 'product_categories','as' => 'product_categories.show','icon' => 'fas fa-eye','parent' => $manageProductCategories->id,'parent_original' => $manageProductCategories->id,'parent_show' => $manageProductCategories->id,'sidebar_link' => '1','appear' => '0']);
        $updateProductCategories = Permission::create(['name' => 'update_product_categories','display_name' => 'Update Category','route' => 'product_categories','module' => 'product_categories','as' => 'product_categories.edit','icon' => 'fa-solid fa-pen-to-square','parent' => $manageProductCategories->id,'parent_original' => $manageProductCategories->id,'parent_show' => $manageProductCategories->id,'sidebar_link' => '1','appear' => '0']);
        $deleteProductCategories = Permission::create(['name' => 'delete_product_categories','display_name' => 'Delete Category','route' => 'product_categories','module' => 'product_categories','as' => 'product_categories.destroy','icon' => 'fa-solid fa-trash-can','parent' => $manageProductCategories->id,'parent_original' => $manageProductCategories->id,'parent_show' => $manageProductCategories->id,'sidebar_link' => '1','appear' => '0']);


    }
}
