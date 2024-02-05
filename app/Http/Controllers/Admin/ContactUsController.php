<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Models\ContactUs;
use Illuminate\Support\Facades\View as ViewShare;

class ContactUsController extends Controller
{
    public function __construct()
    {
        ViewShare::share('nav', 'contact-us');
    }

    public function index(Request $request){
        $contacts_us = ContactUs::orderBy('created_at', 'DESC')->paginate(5);
        return view('admin.contact_us.index', compact('contacts_us'));
    }
}
