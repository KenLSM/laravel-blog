<?php

use Illuminate\Database\Seeder;

class posts_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('posts')->insert([
            'title' => str_random(25),
            'body' => str_random(200),
        ]);
    }
}
