<?php

namespace Database\Seeders;

use App\Models\Todolist;
use App\Models\Stopwatch;
use App\Models\User;
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
        User::factory()
            ->has(Todolist::factory()->count(20))
            ->has(Stopwatch::factory()->count(1))
            ->create([
                'name' => 'Chandra',
                'email' => 'cat@gmail.com',
            ]);
    }
}
