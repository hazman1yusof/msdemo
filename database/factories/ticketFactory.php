<?php

use Faker\Generator as Faker;

$factory->define(App\ticket::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'description' => $faker->paragraphs($nb = 3, $asText = true),
        'status' => $faker->randomElement($array = array ('Open','Answered','Resolved','Closed')),
        'priority' => $faker->randomElement($array = array ('Low','Medium','High','Urgent')),
        'category' => $faker->randomElement($array = array ('None','Question','Incident','Problem')),
        'assign_to' => $faker->numberBetween($min = 1, $max = 15),
        'report_by' => $faker->numberBetween($min = 1, $max = 35),
        'created_by' => $faker->userName
    ];
});