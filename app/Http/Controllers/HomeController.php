<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function architectsInHosur(){
        return view('architects_in_hosur');
    }
    public function architectsInBangalore(){
        return view('architects_in_bangalore');
    }
    public function architectsInChennai(){
        return view('architects_in_chennai');
    }


    public function buildingConstructionContractorsHosur(){
        return view('building_construction_contractors_hosur');
    }
    public function buildingConstructionContractorsBangalore(){
        return view('building_construction_contractors_bangalore');
    }
    public function buildingConstructionContractorsChennai(){
        return view('building_construction_contractors_chennai');
    }


    public function interiorDesignersInHosur(){
        return view('interior_designers_in_hosur');
    }
    public function interiorDesignersInBangalore(){
        return view('interior_designers_in_bangalore');
    }
    public function interiorDesignersInChennai(){
        return view('interior_designers_in_chennai');
    }


    public function houseConstructionCompanyInHosur(){
        return view('house_construction_company_in_hosur');
    }
    public function houseConstructionCompanyInBangalore(){
        return view('house_construction_company_in_bangalore');
    }
    public function houseConstructionCompanyInChennai(){
        return view('house_construction_company_in_chennai');
    }

    public function renovationContractorsInHosur(){
        return view('renovation_contractors_in_hosur');
    }

    public function houseRenovationContractorsBangalore(){
        return view('house_renovation_contractors_bangalore');
    }

    public function houseRenovationContractorsChennai(){
        return view('house_renovation_contractors_chennai');
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
