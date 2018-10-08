<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'age' => rand(18,80),
        'description' => 'descripcion',
        'address_exp'=> 'address',
    ];
});
