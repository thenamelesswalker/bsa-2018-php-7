<?php

use Faker\Generator as Faker;

$factory->define(App\Entity\Money::class, function (Faker $faker) {
    return [
        "currency_id" => $faker->randomElement(\App\Entity\Currency::all()->lists('id')),
        "amount" => $faker->randomFloat(),
        "wallet_id" => $faker->randomElement(\App\Entity\Wallet::all()->lists('id')),
    ];
});
