<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use Faker\Generator as Faker;

$factory->define(App\Course::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3),
        'cover' => $faker->imageUrl(),
        'content' => $faker->paragraph(),
        'robotics_kit_id' => $faker->numberBetween(1,3)
    ];
});
