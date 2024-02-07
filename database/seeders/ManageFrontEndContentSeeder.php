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
                    'title' => 'Residences',
                    'photo' => 'gallery_img/residential-architects.png',
                    'description' => 'We build residences with ideas based on providing greenery & space designed with top architects in hosur keeping your privacy in mind',
                ]);
                $image2 = new FrontendImage([
                    'photo' => 'gallery_img/villa-architects.png',
                    'title' => 'Villas',
                    'description' => 'Get your luxury villas planned by the best architects in hosur who are hand picked for their insightful designs.'
                ]);
                $image3 = new FrontendImage([
                    'photo' => 'gallery_img/apartment-architecture-design.png',
                    'title' => 'Apartments',
                    'description' => 'Locate your exclusive apartments sketched precisely with family-centric facilities to give the right sense of contentment.'
                ]);

                $image4 = new FrontendImage([
                    'photo' => 'gallery_img/bungalow-house-design.png',
                    'title' => 'Bunglow',
                    'description' => 'Find your bungalow built to the highest standards with a perfect combination of modern architecture and features to provide comfort living.'
                ]);

                $image5 = new FrontendImage([
                    'photo' => 'gallery_img/bungalow-house-design.png',
                    'title' => 'Duplex House',
                    'description' => 'We have the best team of architects in hosur who deliver your extended lifespaces loaded with amenities, making your duplex house stand apart due to its distinct features.'
                ]);

                $image6 = new FrontendImage([
                    'photo' => 'gallery_img/row-house-architecture-design.png',
                    'title' => 'Row House',
                    'description' => 'Enjoy living in the expansive space artfully designed to make an exclusive row house that you would be proud to own.'
                ]);

                $content->frontendImages()->saveMany([$image1, $image2, $image3, $image4, $image5, $image6]);

                // Create FAQs
                $faq1 = new Faq([
                    'question' => 'Why is Construction Technology the Best Architectural Firm in Hosur?',
                    'description' => 'To ensure client happiness, CHENNEE architecture specialists in Hosur create sustainable buildings by ensuring that the form is consistent with its utility.',
                ]);
                $faq2 = new Faq([
                    'question' => 'What are the Process Followed by Construction Technology to Plan My New Home?',
                    'description' => 'When we begin, Construction Technology top team of architecting expertise in Hosur will accompany you through all stages of raising building, architecture planning, and interior designs to witness the unfolding of your dream home.',
                ]);
                $faq3 = new Faq([
                    'question' => 'Why is Construction Technology the Best Architectural Firm in Hosur?',
                    'description' => 'To ensure client happiness, CHENNEE architecture specialists in Hosur create sustainable buildings by ensuring that the form is consistent with its utility.',
                ]);
                $faq4 = new Faq([
                    'question' => 'What are the Process Followed by Construction Technology to Plan My New Home?',
                    'description' => 'When we begin, Construction Technology top team of architecting expertise in Hosur will accompany you through all stages of raising building, architecture planning, and interior designs to witness the unfolding of your dream home.',
                ]);
                $faq5 = new Faq([
                    'question' => 'Why is Construction Technology the Best Architectural Firm in Hosur?',
                    'description' => 'To ensure client happiness, CHENNEE architecture specialists in Hosur create sustainable buildings by ensuring that the form is consistent with its utility.',
                ]);
                $faq6 = new Faq([
                    'question' => 'What are the Process Followed by Construction Technology to Plan My New Home?',
                    'description' => 'When we begin, Construction Technology top team of architecting expertise in Hosur will accompany you through all stages of raising building, architecture planning, and interior designs to witness the unfolding of your dream home.',
                ]);

                $content->faqs()->saveMany([$faq1, $faq2, $faq3, $faq4, $faq5, $faq6]);
            }
        }
    }
}
