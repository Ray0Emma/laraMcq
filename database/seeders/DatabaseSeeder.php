<?php

namespace Database\Seeders;


use App\Models\Formulaire;
use App\Models\Question;
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
        // \App\Models\User::factory(10)->create();

        Formulaire::factory()->has(Question::factory()->count(4))->count(4)->create();
    }
}
