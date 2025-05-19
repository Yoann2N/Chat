<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Groupe extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            MessageSeeder::class,
            ConversationSeeder::class,
            TestSeeder::class,
            DatabaseSeeder::class,
        ]);
    }
    
}
