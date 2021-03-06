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

$factory->define(DemoLaravel\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(DemoLaravel\Produto::class, function (Faker\Generator $faker) {
    return [
        'codigo' => $faker->numberBetween(0, 1000),
        'descricao' => $faker->text(),
        'quantidade' => $faker->numberBetween(0, 500)
    ];
});

$factory->define(DemoLaravel\Book::class, function (Faker\Generator $faker) {
    return [
        'isbn' => $faker->isbn10,
        'title' => $faker->text(50),
        'subtitle' => $faker->text(100),
        'description' => $faker->paragraphs(5, true),
        'author' => $faker->name,
        'publisher' => $faker->company,
        'pages' => $faker->numberBetween(0, 1000),
        'year' => $faker->year,
        'image' => $faker->url
    ];
});