<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'prenom' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'is_admin' => true,
            'password' => bcrypt('admin')
        ]);
        User::create([
            'name' => 'User',
            'prenom' => 'User',
            'username' => 'user',
            'email' => 'user1@gmail.com',
            'password' => bcrypt('user')
        ]);
        User::create([
            'name' => 'User2',
            'prenom' => 'User2',
            'username' => 'user2',
            'email' => 'user2@gmail.com',
            'password' => bcrypt('user2')
        ]);
        User::factory(100)->create();
    }
}