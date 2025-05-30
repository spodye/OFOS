<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    $this->call([
        ProductSeeder::class,
    ]);

        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'pokharelspandan@gmail.com',
            'password' => Hash::make('password'),
            'role'=>'admin'
        ]);
                User::factory()->create([
            'name' => 'Test User',
            'email' => 'test1@example.com',
            'password' => Hash::make('password'),
        ]);
    }
}
