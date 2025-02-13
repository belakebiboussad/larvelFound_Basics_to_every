<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* DB::table('questions')->insert([
            'title' => str_random(100),
            'description' => str_random(255),   
        ]); */
        factory(App\Question::class, 20)->create();
    }
}
