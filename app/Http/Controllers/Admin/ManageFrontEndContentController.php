<?php

namespace App\Http\Controllers\Admin;

use App\Models\Faq;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\FrontendImage;
use App\Http\Controllers\Controller;
use App\Models\ManageFrontEndContent;
use GuzzleHttp\Psr7\Message;
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
                $manage_content = ManageFrontEndContent::with(['frontendImages', 'faqs'])->where('page_type', $page)->first();
                if($manage_content){
                    $html = view('admin.manage_frontend_content.edit', compact('manage_content'))->render();
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

    public function deleteFaqDetail($faq_id, Request $request){
        try{
            if($request->ajax()){
                $faq = Faq::where('id', $faq_id)->first();
                if($faq){
                    $faq->delete();
                    return response()->json(['status' => 'success', 'html' => "", 'message' => 'FAQ question answers delete successfully']);
                }
                else{
                    return response()->json(['status' => 'error', 'html' => '', 'message' => 'FAQ not found']);
                }
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
        // dd($request->all());

        // Validate the form data
        $request->validate([
            'main_heading' => 'required|string',
            'sub_heading' => 'required|string',
            // 'photo.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Assuming you want to store images
            'img_title.*' => 'required|string',
            'img_description.*' => 'required|string',
            'img_images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'question.*' => 'required|string',
            'description.*' => 'required|string',
        ]);

        // Create a new manage_front_end_contents record
        $content = ManageFrontEndContent::create([
            'main_heading' => $request->input('main_heading'),
            'sub_heading' => $request->input('sub_heading'),
            'page_type' => $request->input('page_type'), // Make sure to add this field to your form
        ]);

        // dd($content);

        // // Upload and associate images with frontend_images
        // foreach ($request->file('photo') as $key => $photo) {
        //     $path = $photo->storeAs('gallery_img', $photo->getClientOriginalName(), 'public');
        //     // Generate a unique name for the file
        //     $fileName = rand().time() . '_' . $photo->getClientOriginalName();

        //     // Move the file to the public folder
        //     $photo->move(public_path('gallery_img'), $fileName);

        //     // Save the file path to the database
        //     $path = 'gallery_img/' . $fileName;
        //     FrontendImage::create([
        //         'manage_front_end_content_id' => $content->id,
        //         'photo' => $path,
        //     ]);
        // }

        // Upload and associate images with frontend_images
        if(($request->file('img_images')) and (count($request->file('img_images')) > 0)){
            foreach ($request->file('img_images') as $key => $photo) {
                // $path = $image->store('gallery_img', 'public');

                $path = $photo->storeAs('gallery_img', $photo->getClientOriginalName(), 'public');
                // Generate a unique name for the file
                $fileName = rand().time() . '_' . $photo->getClientOriginalName();

                // Move the file to the public folder
                $photo->move(public_path('gallery_img'), $fileName);

                // Save the file path to the database
                $path = 'gallery_img/' . $fileName;

                FrontendImage::create([
                    'manage_front_end_content_id' => $content->id,
                    'photo' => $path,
                    'title' => $request->input('img_title')[$key],
                    'description' => $request->input('img_description')[$key],
                ]);
            }
        }

        // Store FAQs
        if(($request->input('question')) and (count($request->input('question')) > 0)){
            foreach ($request->input('question') as $key => $question) {
                Faq::create([
                    'manage_front_end_content_id' => $content->id,
                    'question' => $question,
                    'description' => $request->input('description')[$key],
                ]);
            }
        }

        // Redirect or return a response as needed
        return redirect()->back()->with('success', 'Page data added successfully');
    }

    // public function update(Request $request){
    //     // dd($request->all());

    //     $request->validate([
    //         'main_heading' => 'required|string',
    //         'sub_heading' => 'required|string',
    //         // 'photo.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Allow image update, but not required
    //         // 'question.*' => 'required|string',
    //         // 'description.*' => 'required|string',
    //     ]);

    //     $content = ManageFrontEndContent::findOrFail($request->input('id'));

    //     $content->update([
    //         'main_heading' => $request->input('main_heading'),
    //         'sub_heading' => $request->input('sub_heading'),
    //         // Add other fields as needed
    //     ]);

    //     // Update or add images
    //     if ($request->hasFile('photo')) {
    //         foreach ($request->file('photo') as $photo) {
    //             $fileName = rand().time() . '_' . $photo->getClientOriginalName();
    //             $photo->move(public_path('gallery_img'), $fileName);

    //             FrontendImage::updateOrCreate(
    //                 ['manage_front_end_content_id' => $content->id, 'photo' => 'gallery_img/' . $fileName],
    //                 ['manage_front_end_content_id' => $content->id, 'photo' => 'gallery_img/' . $fileName]
    //             );
    //         }
    //     }

    //     // Update or add FAQs
    //     foreach ($request->input('question') as $key => $question) {
    //         $faqData = [
    //             'question' => $question,
    //             'description' => $request->input('description')[$key],
    //         ];

    //         if ($request->filled('faq_ids.' . $key)) {
    //             // If FAQ ID is provided, update existing FAQ
    //             $faq = Faq::findOrFail($request->input('faq_ids.' . $key));
    //             $faq->update($faqData);
    //         } else {
    //             // If no FAQ ID, create a new FAQ
    //             $content->faqs()->create($faqData);
    //         }
    //     }

    //     // Redirect or return a response as needed
    //     return redirect()->back()->with('success', 'Page data added successfully');
    // }

    // public function update(Request $request, $id){
    //     // dd($request->all());
    //     $request->validate([
    //         'main_heading' => 'required|string',
    //         'sub_heading' => 'required|string',
    //         'photo.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Allow image update, but not required
    //         'question.*' => 'required|string',
    //         'description.*' => 'required|string',
    //     ]);

    //     $content = ManageFrontEndContent::findOrFail($id);

    //     $content->update([
    //         'main_heading' => $request->input('main_heading'),
    //         'sub_heading' => $request->input('sub_heading'),
    //         // Add other fields as needed
    //     ]);

    //     // Update or add images
    //     if ($request->hasFile('photo')) {
    //         foreach ($request->file('photo') as $photo) {
    //             $fileName = time() . '_' . $photo->getClientOriginalName();
    //             $photo->move(public_path('gallery_img'), $fileName);

    //             FrontendImage::updateOrCreate(
    //                 ['manage_front_end_content_id' => $content->id, 'photo' => 'gallery_img/' . $fileName],
    //                 ['manage_front_end_content_id' => $content->id, 'photo' => 'gallery_img/' . $fileName]
    //             );
    //         }
    //     }

    //     // Update or add FAQs
    //     foreach ($request->input('question') as $key => $question) {
    //         $faqData = [
    //             'question' => $question,
    //             'description' => $request->input('description')[$key],
    //         ];

    //         dd($key, $faqData, $request->filled('faq_ids.' . $key));

    //         if ($request->filled('faq_ids.' . $key)) {
    //             // If FAQ ID is provided, update existing FAQ
    //             $faq = Faq::findOrFail($request->input('faq_ids.' . $key));
    //             $faq->update($faqData);
    //         } else {
    //             // If no FAQ ID, create a new FAQ
    //             $content->faqs()->create($faqData);
    //         }
    //     }

    //     return redirect()->route('your.redirect.route');
    // }

    public function update(Request $request, $id)
    {
        $request->validate([
            'main_heading' => 'required|string',
            'sub_heading' => 'required|string',
            'photo.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Allow image update, but not required
            'question.*' => 'required|string',
            'description.*' => 'required|string',
        ]);

        $content = ManageFrontEndContent::findOrFail($id);

        // Step 1: Delete Existing FAQs
        $content->faqs()->delete();

        // Step 2: Update or add images
        if ($request->hasFile('photo')) {
            foreach ($request->file('photo') as $photo) {
                $fileName = time() . '_' . $photo->getClientOriginalName();
                $photo->move(public_path('gallery_img'), $fileName);

                FrontendImage::updateOrCreate(
                    ['manage_front_end_content_id' => $content->id, 'photo' => 'gallery_img/' . $fileName],
                    ['manage_front_end_content_id' => $content->id, 'photo' => 'gallery_img/' . $fileName]
                );
            }
        }

        // Step 3: Create New FAQs
        foreach ($request->input('question') as $key => $question) {
            $faqData = [
                'question' => $question,
                'description' => $request->input('description')[$key],
            ];

            // Create a new FAQ
            $content->faqs()->create($faqData);
        }

        // Step 4: Update the main content
        $content->update([
            'main_heading' => $request->input('main_heading'),
            'sub_heading' => $request->input('sub_heading'),
            // Add other fields as needed
        ]);

        return redirect()->back()->with('success', 'Page data updated successfully');
    }

}
