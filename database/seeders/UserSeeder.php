<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'User1',
            'email'    => 'User1@mail.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'username' => 'User2',
            'email'    => 'User2@mail.com', // jangan sama dengan User1
            'password' => Hash::make('password'),
        ]);
    }
}
