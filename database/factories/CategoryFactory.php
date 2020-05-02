<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    $name = $faker->title();
    return [
        'name'=> $name,
        'alias'=> mb_strtolower($name),
    ];
});
