<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'description' => $faker->paragraphs(5,true),
        'start_date' => $faker->date($format = 'd-m-Y', $max = 'now'),
        'start_time' => $faker->time($format = 'H:i:s', $max = 'now'),
    ];
});
