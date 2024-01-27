<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ManageFrontEndContent;
use App\Models\FrontendImage;
use App\Models\Faq;

class ManageFrontEndContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        if(count(config('enums.page_type')) > 0){
            foreach(config('enums.page_type') as $key => $page_type){
                // Create ManageFrontEndContent
                $content = ManageFrontEndContent::create([
                    'main_heading' => 'Sample Main Heading',
                    'sub_heading' => 'Sample Sub Heading',
                    'page_type' => $key,
                ]);

                // Create FrontendImages
                $image1 = new FrontendImage([
                    'photo' => 'gallery_img/sample_image1.png',
                ]);
                $image2 = new FrontendImage([
                    'photo' => 'gallery_img/sample_image2.png',
                ]);
                $image3 = new FrontendImage([
                    'photo' => 'gallery_img/sample_image1.png',
                ]);

                $content->frontendImages()->saveMany([$image1, $image2, $image3]);

                // Create FAQs
                $faq1 = new Faq([
                    'question' => 'Sample Question 1',
                    'description' => 'Sample Description 1',
                ]);
                $faq2 = new Faq([
                    'question' => 'Sample Question 2',
                    'description' => 'Sample Description 2',
                ]);

                $content->faqs()->saveMany([$faq1, $faq2]);
            }
        }
    }
}
