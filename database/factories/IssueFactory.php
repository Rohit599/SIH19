<?php

use Faker\Generator as Faker;

$factory->define(App\Issue::class, function (Faker $faker) {
    return [
        'title' => 'Issue Title',
        'description' => 'Here description of issue will get display',
        'pollution_id' => rand(1, 4),
        'user_id' => '1',
        'latitude' => 17.6049686 + (rand(-11000, 11000)/100000),
        'longitude' => 78.4859266 + (rand(-11000, 11000)/100000),
        'address' => $faker->address,
        'image' => 'a.png',
        'sentiment' => rand(-100, 100),
        'status' => '1'
    ];
});
