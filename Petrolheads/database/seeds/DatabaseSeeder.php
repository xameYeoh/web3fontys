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
    }
}
