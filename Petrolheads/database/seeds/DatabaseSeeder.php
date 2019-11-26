<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('posts')->insert([
            'title' => 'Car',
            'content' => 'Super cool car',
        ]);
        DB::table('posts')->insert([
            'title' => 'Another Car',
            'content' => 'Another Super cool car',
        ]);
        DB::table('comments')->insert([
            'user_id' => '12',
            'post_id' => '1',
            'content' => 'Dear Car Talk: I have a 1951 Chevy, straight-6, 3-on-the-tree, with 31,000 actual miles. Nice car.',
        ]);
        DB::table('comments')->insert([
            'user_id' => '9',
            'post_id' => '1',
            'content' => 'Nice car!',
        ]);
    }
}
