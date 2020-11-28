<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use Faker\Generator as Faker;
use Faker\Provider\en_US\PhoneNumber;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(2),
        'phone' => $faker->phoneNumber,
        'porcentaje' => rand(1,6)*10,
    ];
});
