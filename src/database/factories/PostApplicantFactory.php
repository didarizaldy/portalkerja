<?php

use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(App\PostApplicant::class, function (Faker $faker) {
    return [
        'id_user' => rand(1, 3),
        'id_post'   => rand(1, 50),
        'confirmed' =>  $faker->boolean(),
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    ];
});
