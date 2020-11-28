<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Driver;
use Faker\Generator as Faker;
use Faker\Provider\en_US\PhoneNumber;

$factory->define(Driver::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'phone' => $faker->phoneNumber,
        'placa' => chr(rand(ord("a"), ord("z"))) . chr(rand(ord("a"), ord("z"))) . chr(rand(ord("a"), ord("z"))) . rand(101,999),
        'estado' => $faker->randomElement(['activo','inactivo']),
        'company_id' => rand(1,5),
    ];
});
