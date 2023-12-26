<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            CitiesTableSeeder::class,
            ApplicantCompanyTableSeeder::class,
            PostsTableSeeder::class,
            PostsApplicantTableSeeder::class,
        ]);
    }
}
