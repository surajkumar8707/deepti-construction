<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Models\Quote;
use Illuminate\Support\Facades\View as ViewShare;

class QuoteController extends Controller
{
    public function __construct()
    {
        ViewShare::share('nav', 'quote');
    }

    public function index(Request $request){
        $quotes = Quote::orderBy('created_at', 'DESC')->paginate(5);
        return view('admin.quote.index', compact('quotes'));
    }
}
