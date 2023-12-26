<?php

use Carbon\Carbon;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->name,
        'npm' => $faker->randomNumber(8, true),
        'faculty' => $faker->randomElement(['informatika', 'mesin', 'elektro']),
        'roles' => 'user',
        'api_token'  => str_random(32),
        'password' => bcrypt('sttdb00'),
        'remember_token' => str_random(32),
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    ];
});
