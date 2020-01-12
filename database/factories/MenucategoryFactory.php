<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Menucategory;
use Faker\Generator as Faker;

$factory->define(Menucategory::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
    ];
});
