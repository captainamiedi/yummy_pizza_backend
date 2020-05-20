<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Pizza;
use Faker\Generator as Faker;

$factory->define(Pizza::class, function (Faker $faker) {

    return [
        'title' => $faker->word,
        'image' => $faker->word,
        'price' => $faker->word,
        'description' => $faker->text,
        'variations' => $faker->word,
        'trad_toppings' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
