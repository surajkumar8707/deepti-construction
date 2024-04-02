<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing records
        Setting::truncate();

        // Seed new data
        Setting::create([
            'app_name' => 'Construction Technology',
            'email' => 'const.technology62@gmail.com',
            'whatsapp' => '+91 9324394183',
            'contact' => '+91 9324394183',
            'header_image' => 'public/assets/images/header-logo.png',
        ]);
    }
}
