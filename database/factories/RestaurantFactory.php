<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Restaurant;
use Faker\Generator as Faker;
use Faker\Provider\en_US\PhoneNumber;

$factory->define(Restaurant::class, function (Faker $faker) {
    return [
        'name' => $this->faker->name,
        'phone' => $this->faker->phoneNumber,
        'direccion' => $this->faker->sentence(3),
    ];
});
