<?php

use Faker\Generator as Faker;

$factory->define(App\customer::class, function (Faker $faker) {
    return [
        'username' => $faker->userName,
        'category' => $faker->numberBetween($min = 1, $max = 5),
        'company' => $faker->company,
        'address' => $faker->streetAddress,
        'province' => $faker->state,
        'city' => $faker->city,
        'postcode' => $faker->postcode,
        'mobile_nm' => $faker->numerify('###########'),
        'f_name' => $faker->firstName,
        'l_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('rahsia'),
        'remember_token' => str_random(10),
    ];
});
