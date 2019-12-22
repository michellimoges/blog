<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        DB::table('posts')->insert([
            ['title' => 'My first post','content'=>$faker->text(),'user_id'=>3],
            ['title' => 'My second post !', 'content' => $faker->text(), 'user_id' => 3],
            ['title' => 'Another one !', 'content' => $faker->text(), 'user_id' => 3],
        ]);
    }
}
