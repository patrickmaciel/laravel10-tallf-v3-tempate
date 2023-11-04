<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profiles = [
            ['id' => 1, 'name' => 'User', 'description' => 'Normal user'],
            ['id' => 2, 'name' => 'Moderator', 'description' => 'Moderator'],
            ['id' => 3, 'name' => 'Admin', 'description' => 'Administrator'],
        ];

        foreach ($profiles as $profile) {
            \App\Models\Profile::factory()->create([
                'id' => $profile['id'],
                'name' => $profile['name'],
                'description' => $profile['description'],
            ]);
        }
    }
}
