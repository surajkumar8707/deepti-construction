<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View as ViewShare;

class HomeController extends Controller
{
    public function __construct()
    {
        ViewShare::share('nav', 'Dashboard');
    }
    
    public function index(): View
    {
        $viewData = array();
        $viewData['user_count'] = User::count();

        return view('home', $viewData);
    }
}
