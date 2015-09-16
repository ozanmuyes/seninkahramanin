<?php

use Illuminate\Database\Seeder;

use Bican\Roles\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            "name" => "User",
            "slug" => "user"
        ]);

        Role::create([
            "name" => "Admin",
            "slug" => "admin"
        ]);
    }
}
