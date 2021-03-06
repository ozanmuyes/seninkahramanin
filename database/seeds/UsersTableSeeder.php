<?php

use Illuminate\Database\Seeder;

use App\User;
use Bican\Roles\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                "twitter_id" => "182767166",
                "facebook_id" => "10153312319043172",
                "first_name" => "Ozan",
                "last_name" => "Müyesseroğlu",
                "email" => "ozi5169@gmail.com",
                "password" => "muyes5169",
                "role" => "admin"
            ],
            [
                "twitter_id" => null,
                "facebook_id" => null,
                "first_name" => "Münir",
                "last_name" => "Özkul",
                "email" => "m.ozkul@gmail.com",
                "password" => "m.ozkul@gmail.com",
                "role" => "admin"
            ],
            [
                "twitter_id" => null,
                "facebook_id" => null,
                "first_name" => "Cem",
                "last_name" => "Ünlü",
                "email" => "cemunlu27@gmail.com",
                "password" => "cemunlu27@gmail.com",
                "role" => "user"
            ],
            [
                "twitter_id" => null,
                "facebook_id" => null,
                "first_name" => "Test",
                "last_name" => "Account",
                "email" => "test@account.com",
                "password" => "test",
                "role" => "user"
            ]
        ];

        foreach ($users as $user) {
            $role = Role::where(["slug" => $user["role"]])->first();

            $user = User::create([
                "twitter_id" => $user["twitter_id"],
                "facebook_id" => $user["facebook_id"],
                "first_name" => $user["first_name"],
                "last_name" => $user["last_name"],
                "email" => $user["email"],
                "password" => Hash::make($user["password"]),
            ]);

            $user->attachRole($role);
        }
    }
}
