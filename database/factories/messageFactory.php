<?php

use Faker\Generator as Faker;

$factory->define(App\message::class, function (Faker $faker) {
    return [
        'message_type' => $faker->randomElement($array = array ('agent','customer','remark')),
        'text' => $faker->paragraphs($nb = 3, $asText = true),
        'user_id' => $faker->numberBetween($min = 1, $max = 35)
    ];
});
