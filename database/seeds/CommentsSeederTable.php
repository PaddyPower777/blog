<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CommentsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 0; $i < 100; $i++) {
            DB::table('comments')->insert([
                'user_id' => rand(1,100),
                'post_id' => rand(1,100),
                'comment' => $faker->text(20),
                'created_at' => $faker->dateTimeThisDecade($max = 'now', 'UTC'),
                'updated_at' => $faker->dateTimeThisDecade($max = 'now', 'UTC'),
            ]);
        }
    }
}
