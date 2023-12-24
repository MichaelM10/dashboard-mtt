<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'role' => 'admin',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Test Staff',
            'email' => 'staff@example.com',
            'password' => 'staff@example.com',
            'role' => 'staff',
        ]);

        DB::table('item_categories')->insert([
            'categoryName' => 'SparePart',
        ]);

        DB::table('items')->insert([
            'categoryId' => '1',
            'itemName' => 'Piston di-T',
            'brand' => 'KUBOTA',
            'description' => 'Piston RD85 di-T',
            'stock' => 10,
            'latestPrice' => 200000,
        ]);

    }
}
