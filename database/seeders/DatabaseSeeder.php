<?php

namespace Database\Seeders;

use App\Models\Talk;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      
        User::factory()
        ->has(Talk::factory()->count(5))
        ->create([
            'name' => 'First Person',
            'email' => 'thisperson@gmail.com',
        ]);
    }
}
