<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Models\FrontendImage;
use App\Models\ManageFrontEndContent;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function architectsInHosur(){
        $manage_content = ManageFrontEndContent::with(['frontendImages', 'faqs'])->where('page_type', 'architects_in_hosur')->first();
        return view('architects_in_hosur', compact('manage_content'));
    }
    public function architectsInBangalore(){
        $manage_content = ManageFrontEndContent::with(['frontendImages', 'faqs'])->where('page_type', 'architects_in_bangalore')->first();
        return view('architects_in_bangalore', compact('manage_content'));
    }
    public function architectsInChennai(){
        $manage_content = ManageFrontEndContent::with(['frontendImages', 'faqs'])->where('page_type', 'architects_in_chennai')->first();
        return view('architects_in_chennai', compact('manage_content'));
    }


    public function buildingConstructionContractorsHosur(){
        $manage_content = ManageFrontEndContent::with(['frontendImages', 'faqs'])->where('page_type', 'building_construction_contractors_hosur')->first();
        return view('building_construction_contractors_hosur', compact('manage_content'));
    }
    public function buildingConstructionContractorsBangalore(){
        $manage_content = ManageFrontEndContent::with(['frontendImages', 'faqs'])->where('page_type', 'building_construction_contractors_bangalore')->first();
        return view('building_construction_contractors_bangalore', compact('manage_content'));
    }
    public function buildingConstructionContractorsChennai(){
        $manage_content = ManageFrontEndContent::with(['frontendImages', 'faqs'])->where('page_type', 'building_construction_contractors_chennai')->first();
        return view('building_construction_contractors_chennai', compact('manage_content'));
    }


    public function interiorDesignersInHosur(){
        $manage_content = ManageFrontEndContent::with(['frontendImages', 'faqs'])->where('page_type', 'interior_designers_in_hosur')->first();
        return view('interior_designers_in_hosur', compact('manage_content'));
    }
    public function interiorDesignersInBangalore(){
        $manage_content = ManageFrontEndContent::with(['frontendImages', 'faqs'])->where('page_type', 'interior_designers_in_bangalore')->first();
        return view('interior_designers_in_bangalore', compact('manage_content'));
    }
    public function interiorDesignersInChennai(){
        $manage_content = ManageFrontEndContent::with(['frontendImages', 'faqs'])->where('page_type', 'interior_designers_in_chennai')->first();
        return view('interior_designers_in_chennai', compact('manage_content'));
    }


    public function houseConstructionCompanyInHosur(){
        $manage_content = ManageFrontEndContent::with(['frontendImages', 'faqs'])->where('page_type', 'house_construction_company_in_hosur')->first();
        return view('house_construction_company_in_hosur', compact('manage_content'));
    }
    public function houseConstructionCompanyInBangalore(){
        $manage_content = ManageFrontEndContent::with(['frontendImages', 'faqs'])->where('page_type', 'house_construction_company_in_bangalore')->first();
        return view('house_construction_company_in_bangalore', compact('manage_content'));
    }
    public function houseConstructionCompanyInChennai(){
        $manage_content = ManageFrontEndContent::with(['frontendImages', 'faqs'])->where('page_type', 'house_construction_company_in_chennai')->first();
        return view('house_construction_company_in_chennai', compact('manage_content'));
    }

    public function renovationContractorsInHosur(){
        $manage_content = ManageFrontEndContent::with(['frontendImages', 'faqs'])->where('page_type', 'renovation_contractors_in_hosur')->first();
        return view('renovation_contractors_in_hosur', compact('manage_content'));
    }

    public function houseRenovationContractorsBangalore(){
        $manage_content = ManageFrontEndContent::with(['frontendImages', 'faqs'])->where('page_type', 'house_renovation_contractors_bangalore')->first();
        return view('house_renovation_contractors_bangalore', compact('manage_content'));
    }

    public function houseRenovationContractorsChennai(){
        $manage_content = ManageFrontEndContent::with(['frontendImages', 'faqs'])->where('page_type', 'house_renovation_contractors_chennai')->first();
        return view('house_renovation_contractors_chennai', compact('manage_content'));
    }


    public function contactSales(){
        return view('contact_sales');
    }

    public function aboutUs(){
        return view('about_us');
    }

    public function getQuote(){
        return view('get_quote');
    }


}
