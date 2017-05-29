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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(\App\Entry::class, function (Faker\Generator $faker) {
  return [
    'service' => $faker->word,
    'description' => $faker->sentence(2, true),
    'vehicule' => $faker->sentence(8, true),
    'cost' => $faker->numberBetween(1000,9000),
    'pay-method' => $faker->sentence(2, true),
    'status' => $faker->word,
    'client-type' => $faker->sentence(2, true),
    'inventory-number' => $faker->randomDigit,
    'folio' => $faker->randomNumber(2),
    'telephone' => $faker->phoneNumber,
    'contact' => $faker->name,
    'start-time' => $faker->time(),
    'end-time' => $faker->time(),
    'driver' => $faker->name,
  ];
});
