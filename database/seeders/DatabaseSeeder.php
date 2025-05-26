<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'nim' => null,
            'role' => 'admin',
        ]);

        User::factory()->create([
            'name' => 'user',
            'email' => 'user@example.com',
            'nim' => '1234567890',
        ]);
        User::factory()->create([
            'name' => 'seller',
            'email' => 'seller@example.com',
            'nim' => '0987654321',
            'role' => 'seller',
        ]);
    }
}
