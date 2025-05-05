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
            'expediteur_id' => 'message',
            'date_envoi' => 'message',
            'message' => 'message',
            
        ]);

        Message:: factory(10)->create();
            
    }
}
