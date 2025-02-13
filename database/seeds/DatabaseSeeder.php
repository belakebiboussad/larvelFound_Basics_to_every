<?php

use Illuminate\Database\Seeder;
use App\Question;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('QuestionsTableSeeder');
 
        $this->command->info('Questions table seeded!');
    }
}
