<?php

use App\PostApplicant;
use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;

class PostsApplicantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('post_applicants')->insert([
        //     'id_user' => 1,
        //     'id_post' => 1,
        //     'confirmed' => true,
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        // ]);

        // factory(PostApplicant::class, 100)->create();
        // Post::factory(50)->create();
    }
}
