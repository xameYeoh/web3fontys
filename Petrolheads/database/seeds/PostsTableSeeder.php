<?php

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
            'title' => 'Car',
            'content' => 'Super cool car',
        ]);
        DB::table('posts')->insert([
            'title' => 'Another Car',
            'content' => 'Another Super cool car',
        ]);
        DB::table('posts')->insert([
            'title' => 'Another Car',
            'content' => 'Another Super cool car',
        ]);
        DB::table('posts')->insert([
            'title' => 'Another Car',
            'content' => 'Another Super cool car',
        ]);
        DB::table('posts')->insert([
            'title' => 'Another Car',
            'content' => 'Another Super cool car',
        ]);
        DB::table('posts')->insert([
            'title' => 'Another Car',
            'content' => 'Another Super cool car',
        ]);
        DB::table('posts')->insert([
            'title' => 'Another Car',
            'content' => 'Another Super cool car',
        ]);
        DB::table('posts')->insert([
            'title' => 'Another Car',
            'content' => 'Another Super cool car',
        ]);
        DB::table('posts')->insert([
            'title' => 'Another Car',
            'content' => 'Another Super cool car',
        ]);
        DB::table('posts')->insert([
            'title' => 'Another Car',
            'content' => 'Another Super cool car',
        ]);
        
    }
}
