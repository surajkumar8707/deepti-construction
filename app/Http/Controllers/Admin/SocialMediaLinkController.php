<?php

namespace App\Http\Controllers\Admin;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\SocialMediaLink;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View as ViewShare;

class SocialMediaLinkController extends Controller
{
    public function __construct()
    {
        ViewShare::share('nav', 'social-media-link');
    }

    public function show(): View
    {
        $socialMediaLinks = SocialMediaLink::first();
        return view('admin.social_media.show', compact('socialMediaLinks'));
    }

    public function create(): View
    {
        $socialMediaLinks = SocialMediaLink::first();
        return view('admin.social_media.create', compact('socialMediaLinks'));
    }

    public function storeOrUpdate(Request $request)
    {
        $request->validate([
            'youTube' => 'nullable|string',
            'instagram' => 'nullable|string',
            'facebook' => 'nullable|string',
            'linkedin' => 'nullable|string',
            'at_least_one' => 'required_without_all:youTube,instagram,facebook,linkedin',
        ], [
            'at_least_one' => 'At least one of YouTube, Instagram, Facebook, or LinkedIn is required.',
        ]);
        $socialMediaLinks = SocialMediaLink::firstOrNew();

        // Update or add new links
        $socialMediaLinks->youTube = $request->input('youTube');
        $socialMediaLinks->instagram = $request->input('instagram');
        $socialMediaLinks->facebook = $request->input('facebook');
        $socialMediaLinks->linkedin = $request->input('linkedin');
        $socialMediaLinks->save();

        return redirect()->route('admin.social.media.show')->with(['message' => 'Social media links updated/added successfully']);
    }
}
