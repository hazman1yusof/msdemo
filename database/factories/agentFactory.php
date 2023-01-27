<?php

use Faker\Generator as Faker;

$factory->define(App\agent::class, function (Faker $faker) {
    return [
        'username' => $faker->userName,
        'category' => $faker->numberBetween($min = 1, $max = 5),
        'f_name' => $faker->firstName,
        'l_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('rahsia'),
        'remember_token' => str_random(10),
    ];
});
