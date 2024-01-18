<?php

namespace Database\Seeders;


use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => 'admin@123',
            ],
        ];

        foreach ($admins as $admin) {
            $exist = Admin::where('email', $admin['email'])->first();
            if(empty($exist)){
                Admin::firstOrCreate([
                    'name' => $admin['name'],
                    'email' => $admin['email'],
                    'password' => bcrypt($admin['password']),
                ]);
            }
        }
    }
}
