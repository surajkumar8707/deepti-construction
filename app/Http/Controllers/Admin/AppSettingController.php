<?php

namespace App\Http\Controllers\Admin;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View as ViewShare;

class AppSettingController extends Controller
{
    public function __construct()
    {
        ViewShare::share('nav', 'app-setting');
    }

    public function setting(): View
    {
        $settings = Setting::first();
        // dd($settings);
        return view('admin.setting', compact('settings'));
    }

    public function settingUpdate(Request $request)
    {
        // dd($request->toArray());
        $request->validate([
            'app_name' => 'required',
            'email' => 'required|email',
            'whatsapp' => 'required',
            'contact' => 'required',
            // 'header_image' => 'nullable|url',
            'header_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);
        // Find an existing record or create a new one
        $settings = Setting::firstOrNew();

        // Update or add new settings
        $settings->app_name = $request->input('app_name');
        $settings->email = $request->input('email');
        $settings->whatsapp = $request->input('whatsapp');
        $settings->contact = $request->input('contact');

        // Handle image upload
        if ($request->hasFile('header_image')) {
            $customFileName = 'custom_image_name_' . time() . '_' . rand(100, 999) . '.' . $request->file('header_image')->getClientOriginalExtension();
            $request->file('header_image')->move(public_path('assets/images'), $customFileName);
            $settings->header_image = 'assets/images/' . $customFileName;
        }
        // $settings->header_image = $request->input('header_image');
        $settings->save();

        return redirect()->route('admin.app.setting')->with('success', 'Settings updated/added successfully');
        // return redirect()->back()->with('success', 'Setting updated Successfully');
    }
}
