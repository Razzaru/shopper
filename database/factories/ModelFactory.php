<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Product::class, function (Faker\Generator $faker) {
    
    return [
        'title' => $faker->word,
        'description' => $faker->paragraph(),
        'size' => $faker->randomLetter,
        'colour' => $faker->colorName,
        'price' => $faker->randomNumber(),
        'reward-points' => $faker->randomNumber(),
        'code' => mt_rand(14, 14),
        'count' => $faker->randomNumber(),
        'category_id' => 1,
        'brand_id' => 1,
    ];
});
