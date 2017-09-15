<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'address' => $faker->streetName . ' ' . $faker->buildingNumber,
        'zip' => $faker->randomNumber(4),
        'city' => $faker->city,
        'js_number' => $faker->numerify('###.####.###'),
        'stv_number' => $faker->numerify('####.##.###'),
        'iban' => $faker->numerify('CH10 #### #### ##'),
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
