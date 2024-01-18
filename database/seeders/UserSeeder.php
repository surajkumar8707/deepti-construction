<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Taylor Otwell',
                'email' => 'taylor@gmail.com',
                'password' => 'taylor@123'
            ],
            [
                'name' => 'Matt Stauffer',
                'email' => 'matt@gmail.com',
                'password' => 'matt@123'
            ],
        ];

        foreach ($users as $key => $user) {
            $u = User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => bcrypt($user['password'])
            ]);
        }
    }
}
