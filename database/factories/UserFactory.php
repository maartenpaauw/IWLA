<?php

use App\User;
use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'will_earn_medals' => $faker->boolean,
    ];
});
