<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Models\FrontendImage;
use App\Models\ContactUs;
use App\Models\Quote;
use App\Models\ManageFrontEndContent;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function architectsInHosur(){
        $manage_content = ManageFrontEndContent::with(['frontendImages', 'faqs'])->where('page_type', 'architects_in_lucknow')->first();
        // dd($manage_content);
        return view('architects_in_hosur', compact('manage_content'));
    }
    public function architectsInBangalore(){
        $manage_content = ManageFrontEndContent::with(['frontendImages', 'faqs'])->where('page_type', 'architects_in_gorakpur')->first();
        return view('architects_in_bangalore', compact('manage_content'));
    }
    public function architectsInChennai(){
        $manage_content = ManageFrontEndContent::with(['frontendImages', 'faqs'])->where('page_type', 'architects_in_allahabaad')->first();
        return view('architects_in_chennai', compact('manage_content'));
    }


    public function buildingConstructionContractorsHosur(){
        $manage_content = ManageFrontEndContent::with(['frontendImages', 'faqs'])->where('page_type', 'building_construction_contractors_lucknow')->first();
        return view('building_construction_contractors_hosur', compact('manage_content'));
    }
    public function buildingConstructionContractorsBangalore(){
        $manage_content = ManageFrontEndContent::with(['frontendImages', 'faqs'])->where('page_type', 'building_construction_contractors_gorakpur')->first();
        return view('building_construction_contractors_bangalore', compact('manage_content'));
    }
    public function buildingConstructionContractorsChennai(){
        $manage_content = ManageFrontEndContent::with(['frontendImages', 'faqs'])->where('page_type', 'building_construction_contractors_allahabaad')->first();
        return view('building_construction_contractors_chennai', compact('manage_content'));
    }


    public function interiorDesignersInHosur(){
        $manage_content = ManageFrontEndContent::with(['frontendImages', 'faqs'])->where('page_type', 'interior_designers_in_lucknow')->first();
        return view('interior_designers_in_hosur', compact('manage_content'));
    }
    public function interiorDesignersInBangalore(){
        $manage_content = ManageFrontEndContent::with(['frontendImages', 'faqs'])->where('page_type', 'interior_designers_in_gorakpur')->first();
        return view('interior_designers_in_bangalore', compact('manage_content'));
    }
    public function interiorDesignersInChennai(){
        $manage_content = ManageFrontEndContent::with(['frontendImages', 'faqs'])->where('page_type', 'interior_designers_in_allahabaad')->first();
        return view('interior_designers_in_chennai', compact('manage_content'));
    }


    public function houseConstructionCompanyInHosur(){
        $manage_content = ManageFrontEndContent::with(['frontendImages', 'faqs'])->where('page_type', 'house_construction_company_in_lucknow')->first();
        return view('house_construction_company_in_hosur', compact('manage_content'));
    }
    public function houseConstructionCompanyInBangalore(){
        $manage_content = ManageFrontEndContent::with(['frontendImages', 'faqs'])->where('page_type', 'house_construction_company_in_gorakpur')->first();
        return view('house_construction_company_in_bangalore', compact('manage_content'));
    }
    public function houseConstructionCompanyInChennai(){
        $manage_content = ManageFrontEndContent::with(['frontendImages', 'faqs'])->where('page_type', 'house_construction_company_in_allahabaad')->first();
        return view('house_construction_company_in_chennai', compact('manage_content'));
    }

    public function renovationContractorsInHosur(){
        $manage_content = ManageFrontEndContent::with(['frontendImages', 'faqs'])->where('page_type', 'renovation_contractors_in_lucknow')->first();
        return view('renovation_contractors_in_hosur', compact('manage_content'));
    }

    public function houseRenovationContractorsBangalore(){
        $manage_content = ManageFrontEndContent::with(['frontendImages', 'faqs'])->where('page_type', 'house_renovation_contractors_gorakpur')->first();
        return view('house_renovation_contractors_bangalore', compact('manage_content'));
    }

    public function houseRenovationContractorsChennai(){
        $manage_content = ManageFrontEndContent::with(['frontendImages', 'faqs'])->where('page_type', 'house_renovation_contractors_allahabaad')->first();
        return view('house_renovation_contractors_chennai', compact('manage_content'));
    }


    public function contactSales(){
        return view('contact_sales');
    }

    public function contactSave(Request $request){
        $interest = [];

        if($request->service1){
            $interest[] = $request->service1;
        }
        if($request->service2){
            $interest[] = $request->service2;
        }
        if($request->service3){
            $interest[] = $request->service3;
        }
        if($request->service4){
            $interest[] = $request->service4;
        }
        if($request->service5){
            $interest[] = $request->service5;
        }

        $contacts = new ContactUs;
        $contacts->first_name = (isset($request->firstName) and !empty($request->firstName)) ? $request->firstName : NULL;
        $contacts->last_name = (isset($request->lastName) and !empty($request->lastName)) ? $request->lastName : NULL;
        $contacts->phone = (isset($request->phone) and !empty($request->phone)) ? $request->phone : NULL;
        $contacts->email = (isset($request->email) and !empty($request->email)) ? $request->email : NULL;
        $contacts->interest = (isset($interest) and (count($interest) > 0)) ? implode(',', $interest) : NULL;
        $contacts->message = (isset($request->message) and !empty($request->message)) ? $request->message : NULL;
        $contacts->site_location = (isset($request->location) and !empty($request->location)) ? $request->location : NULL;
        $contacts->site_area = (isset($request->sitearea) and !empty($request->sitearea)) ? $request->sitearea : NULL;
        $contacts->residential_building = (isset($request->building) and !empty($request->building)) ? $request->building : NULL;
        $contacts->bedrooms = (isset($request->bedroom) and !empty($request->bedroom)) ? $request->bedroom : NULL;
        $contacts->materials = (isset($request->brick) and !empty($request->brick)) ? $request->brick : NULL;
        $contacts->planning_execution = (isset($request->plan) and !empty($request->plan)) ? $request->plan : NULL;
        $contacts->call_back = (isset($request->call) and !empty($request->call)) ? $request->call : NULL;

        $contacts->save();
        // dd($contacts, $interest, $request->all());

        // return view('contact_sales');
    }

    public function thankYou(){
        return view('thank_you');
    }
    public function aboutUs(){
        return view('about_us');
    }
    public function privacyPolicy(){
        return view('privacy_policy');
    }
    public function termsConditions(){
        return view('terms_conditions');
    }

    public function getQuote(){
        $manage_content = ManageFrontEndContent::with(['frontendImages', 'faqs'])->where('page_type', 'house_renovation_contractors_allahabaad')->first();
        return view('get_quote', compact('manage_content'));
    }

    public function quoteSave(Request $request){
        $interest = [];


        if($request->service1){
            $interest[] = $request->service1;
        }
        if($request->service2){
            $interest[] = $request->service2;
        }
        if($request->service3){
            $interest[] = $request->service3;
        }
        if($request->service4){
            $interest[] = $request->service4;
        }
        if($request->service5){
            $interest[] = $request->service5;
        }

        $quote = new Quote;
        $quote->first_name = (isset($request->firstName) and !empty($request->firstName)) ? $request->firstName : NULL;
        $quote->last_name = (isset($request->lastName) and !empty($request->lastName)) ? $request->lastName : NULL;
        $quote->phone = (isset($request->phone) and !empty($request->phone)) ? $request->phone : NULL;
        $quote->email = (isset($request->email) and !empty($request->email)) ? $request->email : NULL;
        $quote->interest = (isset($interest) and (count($interest) > 0)) ? implode(',', $interest) : NULL;
        $quote->message = (isset($request->message) and !empty($request->message)) ? $request->message : NULL;
        $quote->site_location = (isset($request->location) and !empty($request->location)) ? $request->location : NULL;
        $quote->site_area = (isset($request->sitearea) and !empty($request->sitearea)) ? $request->sitearea : NULL;
        $quote->residential_building = (isset($request->building) and !empty($request->building)) ? $request->building : NULL;
        $quote->bedrooms = (isset($request->bedroom) and !empty($request->bedroom)) ? $request->bedroom : NULL;
        $quote->materials = (isset($request->brick) and !empty($request->brick)) ? $request->brick : NULL;
        $quote->planning_execution = (isset($request->plan) and !empty($request->plan)) ? $request->plan : NULL;
        $quote->call_back = (isset($request->call) and !empty($request->call)) ? $request->call : NULL;

        // dd($quote->toArray(), $quote, $request->all());
        $quote->save();
        // dd($contacts, $interest, $request->all());

        // return view('contact_sales');
    }


}
