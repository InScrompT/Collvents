<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'college' => $faker->streetName,
        'degree' => 'B.E.',
        'course' => $faker->sentence,
        'phone' => $faker->phoneNumber,
        'birthday' => $faker->dateTime
    ];
});
