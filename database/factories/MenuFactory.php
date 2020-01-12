<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Menu;
use Faker\Generator as Faker;

$factory->define(Menu::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'description' => $faker->paragraphs(1,true),
        'price' => $faker->randomNumber($nbDigits = 2, $strict = false),
        'category_id' => 1,
    ];
});
