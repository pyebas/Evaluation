<?php

namespace Database\Seeders;

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
         \App\Models\User::factory(10)->create();
         \App\Models\Agents::factory(10)->create();
         \App\Models\Agents_Contrats::factory(10)->create();
         \App\Models\Agents_Fonctions::factory(10)->create();
         \App\Models\Categories::factory(10)->create();
         \App\Models\Contrats::factory(5)->create();
         \App\Models\Criteres::factory(10)->create();
         \App\Models\Evaluables::factory(10)->create();
         \App\Models\Fonctions::factory(10)->create();
         \App\Models\Agents::factory(10)->create();
    }
}
