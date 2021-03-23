<?php

namespace Database\Seeders;

use App\Models\Assessment;
use App\Models\Score;
use Database\Factories\ScoreFactory;
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
       $domain =  \App\Models\Domain::factory(4)
             ->sequence(
                 ['name'=>'memory'],
                 ['name'=>'reasoning'],
                 ['name'=>'speed'],
                 ['name'=>'attention']
             )->has(
                 Assessment::factory(50)->has(
                     Score::factory(2)
                 )
           )->create();
    }
}
