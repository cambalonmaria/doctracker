<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRole extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        \App\Models\UserRole::factory()->create([
            'id' => 1,
            'userid' => 1,
            'roleid' => 0,
            'role_name' => 0,
        ]);
    }
}
