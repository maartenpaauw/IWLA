<?php

use App\Click;
use App\User;
use Carbon\Carbon;
use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(Click::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class)->create()->id,
        'clicked_at' => $faker->dateTimeBetween(Carbon::now()->subDays(2), Carbon::now()),
    ];
});
