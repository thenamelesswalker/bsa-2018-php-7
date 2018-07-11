<?php

use Faker\Generator as Faker;

$factory->define(App\Entity\Wallet::class, function (Faker $faker) {
    return [
        "user_id" => $faker->randomElement(\App\Entity\User::all()->lists('id')),
    ];
});
