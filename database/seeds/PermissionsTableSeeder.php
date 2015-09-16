<?php

use Illuminate\Database\Seeder;

use Bican\Roles\Models\Role;
use Bican\Roles\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::where(["name" => "Admin"])->first();

        $adminPermissions = [
            Permission::create([
                "name" => "Index Users",
                "slug" => "users.index",
                "model" => "App\User"
            ]),
            Permission::create([
                "name" => "Create User",
                "slug" => "users.create",
                "model" => "App\User"
            ]),
            Permission::create([
                "name" => "View Own User",
                "slug" => "users.view.own",
                "model" => "App\User"
            ]),
            Permission::create([
                "name" => "View Other User",
                "slug" => "users.view.other",
                "model" => "App\User"
            ]),
            Permission::create([
                "name" => "Edit User",
                "slug" => "users.edit",
                "model" => "App\User"
            ]),
            Permission::create([
                "name" => "Delete User",
                "slug" => "users.destroy",
                "model" => "App\User"
            ]),
            Permission::create([
                "name" => "Promote User",
                "slug" => "users.promote",
                "model" => "App\User"
            ]),
            Permission::create([
                "name" => "Demote User",
                "slug" => "users.demote",
                "model" => "App\User"
            ]),

            Permission::create([
                "name" => "Index Orders",
                "slug" => "orders.index",
                "model" => "App\Order"
            ]),
            Permission::create([
                "name" => "View Order",
                "slug" => "orders.view",
                "model" => "App\Order"
            ]),
            Permission::create([
                "name" => "Update Order Status",
                "slug" => "orders.update.status",
                "model" => "App\Order"
            ])
        ];

        foreach ($adminPermissions as $permission) {
            $adminRole->attachPermission($permission);
        }
    }
}
