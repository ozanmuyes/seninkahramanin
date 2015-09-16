<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Address::class, function ($faker) {
    return [
        "user_id" => $faker->numberBetween($min = 1, $max = 2),
        "title" => $faker->randomElement($array = array ("Ev", "İş", "Diğer")),
        "phone_number" => $faker->phoneNumber,
        "line_1" => $faker->streetAddress,
        "line_2" => $faker->secondaryAddress,
        "neighborhood" => $faker->state,
        "city" => $faker->randomElement($array = array ("Ankara", "İstanbul", "İzmir", "Eskişehir")),
    ];
});
