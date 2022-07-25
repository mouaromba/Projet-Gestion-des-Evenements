<?php

namespace Database\Seeders;

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
            'title'         => Str::random(10),
            'description'   => Str::random(30),
            'content'       => Str::random(1048),
            'user_id'       => 1
        ]);

    }
}
