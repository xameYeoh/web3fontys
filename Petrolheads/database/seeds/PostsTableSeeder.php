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
            'title' => 'Cadillac CT5-V comes in under $50,000',
            'content' => 'Plus, Cadillac says the V makes more power than it initially said',
            'owner_id' => '2',
            'post_image' => 'http://127.0.0.1:8000/uploads/5dd7f73efd9db269c1036f38.jpg'
        ]);
        DB::table('posts')->insert([
            'title' => 'F-150 vs. Cybertruck tug-of-war rematch? Bring it, non',
            'content' => 'Musk accepts Ford VP\'s challenge, but now Ford is saying, eh, never mind',
            'owner_id' => '2',
            'post_image' => 'http://127.0.0.1:8000/uploads/5dd7f73efd9db269c1036f38.jpg'
        ]);
        DB::table('posts')->insert([
            'title' => '2020 Nissan Rogue Sport changes reflected in price bump',
            'content' => 'Prices start at $24,335',
            'owner_id' => '2',
            'post_image' => 'http://127.0.0.1:8000/uploads/5dd7f73efd9db269c1036f38.jpg'
        ]);
        DB::table('posts')->insert([
            'title' => 'Cadillac\'s 4.2-liter Blackwing V8 to die with the CT6?',
            'content' => 'Cost cutting leaves the pride of the brand an \'orphan\' in the big sedan',
            'owner_id' => '2',
            'post_image' => 'http://127.0.0.1:8000/uploads/5dd7f73efd9db269c1036f38.jpg'
        ]);
        DB::table('posts')->insert([
            'title' => 'Aston Martin DBS Superleggera Concorde Edition celebrates airspeed',
            'content' => 'Debuts on the anniversary of the Concorde\'s final flight',
            'owner_id' => '2',
            'post_image' => 'http://127.0.0.1:8000/uploads/5dd7f73efd9db269c1036f38.jpg'
        ]);
        DB::table('posts')->insert([
            'title' => 'New Jaguar F-Type to launch — maybe literally — with Hot Wheels\' help',
            'content' => 'What kind of a nutty stunt should we expect this time?',
            'owner_id' => '2',
            'post_image' => 'http://127.0.0.1:8000/uploads/5dd7f73efd9db269c1036f38.jpg'
        ]);
        DB::table('posts')->insert([
            'title' => 'Eight electric pickup truck manufacturers to load up U.S. market by 2021',
            'content' => 'Analysts predict supply will be vastly bigger than demand',
            'owner_id' => '2',
            'post_image' => 'http://127.0.0.1:8000/uploads/5dd7f73efd9db269c1036f38.jpg'
        ]);
        DB::table('posts')->insert([
            'title' => 'This gorgeous 1972 Volkswagen Bus hides an electrified surprise',
            'content' => 'The period-looking body hides e-Golf guts',
            'owner_id' => '2',
            'post_image' => 'http://127.0.0.1:8000/uploads/5dd7f73efd9db269c1036f38.jpg'
        ]);
        DB::table('posts')->insert([
            'title' => 'Updated Bentley Bentayga spotted testing in the snow',
            'content' => 'It brings the more expressive new fascia to the large crossover',
            'owner_id' => '2',
            'post_image' => 'http://127.0.0.1:8000/uploads/5dd7f73efd9db269c1036f38.jpg'
        ]);
        DB::table('posts')->insert([
            'title' => '2020 Nissan Pathfinder Rock Creek Edition Trim Review | An off-roader in name only',
            'content' => 'Adventurous looks try to spruce up the aging crossover',
            'owner_id' => '2',
            'post_image' => 'http://127.0.0.1:8000/uploads/5dd7f73efd9db269c1036f38.jpg'
        ]);
        
    }
}
