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
        if(count(config('enums.frontend_content')) > 0){
            foreach(config('enums.frontend_content') as $key => $frontend_content){
                // Create ManageFrontEndContent
                $insert = array(
                    'main_heading' => $frontend_content['main_heading'],
                    'sub_heading' => $frontend_content['sub_heading'],
                    'page_type' => $frontend_content['page_type'],
                );
                $content = ManageFrontEndContent::create($insert);

                $images = [];
                foreach($frontend_content['images'] as $imgData){
                    $img = new FrontendImage([
                        'photo' => $imgData['photo'],
                        'title' => $imgData['title'],
                        'description' => $imgData['description'],
                    ]);
                    $images[] = $img;
                }
                $content->frontendImages()->saveMany($images);

                $faqs = [];
                foreach($frontend_content['faq'] as $faqData){
                    $faq = new Faq([
                        'question' => $faqData['question'],
                        'description' => $faqData['description'],
                    ]);
                    $faqs[] = $faq;
                }
                $content->faqs()->saveMany($faqs);
            }
        }
    }
}
