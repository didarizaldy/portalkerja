<?php

use App\Post;
use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'slug' => 'host-live-streamer',
            'title' => 'Host Live Streamer',
            'categories' => 'informatika',
            'author' => '1',
            'companies' => 10,
            'editby' => null,
            'token' => str_random(32),
            'graduate' => 'sarjana',
            'skills' => 'entertainment',
            'position' => 'worker',
            'work_type' => 'onsite',
            'worksite' => 3578,
            'salary' => '5500000.00',
            'quota' => '9',
            'jobdesk' => 'Terbiasa live streaming diberbagai platfrom sosial media',
            'expireddate' => date("Y-m-d"),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        // factory(Post::class, 1000)->create();
        // Post::factory(50)->create();
    }
}
