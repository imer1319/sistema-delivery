<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Invoce;
use Faker\Generator as Faker;

$factory->define(Invoce::class, function (Faker $faker) {
    return [
        'c_carrera' => rand(5,10),
        'c_producto' => rand(10,30),
        'company_id' => rand(1,5),
        'user_id' => rand(2,10),
        'driver_id' => rand(1,50),
        'client_id' => rand(1,20),
    ];
});
