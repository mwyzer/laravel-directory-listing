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
        User::insert([
            [
                'name' => 'Super Admin',
                'email' => 'admin@sample.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'user_type' => 'admin',
                'avatar' => 'default_avatar.png', // Provide a default avatar
            ],
            [
                'name' => 'John Doe',
                'email' => 'user@sample.com',
                'password' =>  Hash::make('password'),
                'user_type' => 'user',
                'avatar' => 'default_avatar.png', // Provide a default avatar
            ],
        ]);
    }
}
