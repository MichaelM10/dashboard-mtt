<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test Admin',
            'email' => 'admin@example.com',
            'password' => 'admin@example.com',
            'role' => 'ADMIN',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Test Staff',
            'email' => 'staff@example.com',
            'password' => 'staff@example.com',
            'role' => 'STAFF',
        ]);
    }
}
