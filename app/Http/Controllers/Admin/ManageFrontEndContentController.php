<?php

namespace App\Http\Controllers\Admin;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ManageFrontEndContent;
use Illuminate\Support\Facades\View as ViewShare;

class ManageFrontEndContentController extends Controller
{
    public function __construct()
    {
        ViewShare::share('nav', 'manage-front-end-content');
    }

    public function index(Request $request){
        return view('admin.manage_frontend_content.index');
    }

    public function getPageDetail($page, Request $request){
        try{
            if($request->ajax()){
                $manage_content = ManageFrontEndContent::where('page_type', $page)->first();
                if($manage_content){
                    $html = view('admin.manage_frontend_content.edit', $manage_content)->render();
                }
                else{
                    $html = view('admin.manage_frontend_content.create')->render();
                }

                return response()->json(['status' => 'success', 'html' => $html]);
            }
            else{
                return response()->json(['status' => 'error', 'message' =>'Only ajax requests are allowed']);
            }
        }
        catch(\Exception $e){
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function store(Request $request){
        dd($request->all());
    }

    public function update(Request $request){
        dd($request->all());
    }

}
