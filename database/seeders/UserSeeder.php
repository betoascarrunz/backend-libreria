<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'bascarrunz@prueba.com'],
            [
                'name' => 'Bascarrunz',
                'password' => 'password',
                'email_verified_at' => now(),
            ],
        );
    }
}
