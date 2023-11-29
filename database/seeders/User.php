<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class User extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'id' => 1,
            'email' => 'admin@gmail.com',
            'name' => 'Sample Mayor',
            'password' => Hash::make('1234'),
            'position' => 'Mayor',
            'type' => 'admin',
            'department' => "Mayor's Office"
        ]);

    }
}
