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
        $image_data =  [
            [
                'title' => 'Residences',
                'photo' => 'public/gallery_img/residential-architects.jpg',
                'description' => 'We build residences with ideas based on providing greenery & space designed with top architects in hosur keeping your privacy in mind',
            ],
            [
                'photo' => 'public/gallery_img/villa-architects.jpg',
                'title' => 'Villas',
                'description' => 'Get your luxury villas planned by the best architects in hosur who are hand picked for their insightful designs.'
            ],
            [
                'photo' => 'public/gallery_img/appartment.webp',
                'title' => 'Apartments',
                'description' => 'Locate your exclusive apartments sketched precisely with family-centric facilities to give the right sense of contentment.'
            ],
            [
                'photo' => 'public/gallery_img/bungalow-house-design.jpg',
                'title' => 'Bunglow',
                'description' => 'Find your bungalow built to the highest standards with a perfect combination of modern architecture and features to provide comfort living.'
            ],
            [
                'photo' => 'public/gallery_img/row-house-architecture-design.jpg',
                'title' => 'Duplex House',
                'description' => 'We have the best team of architects in hosur who deliver your extended lifespaces loaded with amenities, making your duplex house stand apart due to its distinct features.'
            ],
            [
                'photo' => 'public/gallery_img/row_house.jpg',
                'title' => 'Row House',
                'description' => 'Enjoy living in the expansive space artfully designed to make an exclusive row house that you would be proud to own.'
            ]
        ];

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

                // foreach($frontend_content['images'] as $imgData){
                foreach($image_data as $imgData){
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
