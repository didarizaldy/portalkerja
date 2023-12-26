<?php

use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'slug' => $faker->unique()->slug(2, true),
        'title' => $faker->words(3, true),
        'categories' => $faker->randomElement(['informatika', 'mesin', 'elektro']),
        'author' => rand(1, 3),
        'companies' => rand(1, 10),
        'editby' => null,
        'token' => str_random(32),
        'graduate' => $faker->randomElement(['megister', 'sarjana', 'diploma', 'smk', 'sma']),
        'experience' => $faker->randomElement(['fresh_graduate', 'oneyear', 'twoyear', 'advanced']),
        'skills' => $faker->randomElement(['Entertainment', 'Teknologi', 'Industri']),
        'position' => $faker->randomElement(['programmer', 'manager', 'staff', 'officer']),
        'work_type' => $faker->randomElement(['remote', 'onsite', 'hybrid']),
        'worksite' => $faker->randomElement(['Remote', 'Bekasi', 'Jakarta']),
        'salary' => $faker->randomElement(['5500000.00', null]),
        'quota' => rand(1, 15),
        'jobdesk' => 'Kerjaan selesai pokoknya',
        'expireddate' => $faker->date('Y-m-d'),
        'created_at' => $faker->date('Y-m-d') . $faker->time(),
    ];
});
