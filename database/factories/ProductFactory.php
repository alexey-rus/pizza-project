<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'=> $faker->title(),
        'description' => $faker->text(100),
        'price' => $faker->numberBetween(2, 99)
    ];
});
