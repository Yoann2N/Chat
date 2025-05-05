<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Message::create([
            'expediteur_id' => '0001',
            'date_envoi' => '05/05/2025',
            'message' => 'message',
            
        ]);

        Message:: factory(10)->create();
            
    }
}
