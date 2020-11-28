<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;
use Faker\Provider\en_US\PhoneNumber;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'phone' => $faker->phoneNumber,
        'company_id' => rand(1,5),
    ];
});
