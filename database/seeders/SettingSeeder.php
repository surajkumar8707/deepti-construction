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
            'email' => 'constructiontechnology.lko@gmail.com',
            'whatsapp' => '+91 96004 42776',
            'contact' => '+91 96004 42776',
            'header_image' => 'assets/images/header-logo.png',
        ]);
    }
}
