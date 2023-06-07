<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageItem;
use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    //--------------------------------------------------- Service --------------------------------------------//

    public function services()
    {
        $page_data = PageItem::where('id',1)->first();
        return view('admin.page_services', compact('page_data'));
    }

    public function services_update(Request $request)
    {
        $page_data = PageItem::where('id',1)->first();

        $request->validate([
            'services_heading' => 'required'
        ]); 

        if ($request->hasFile('services_banner')) {
            $request->validate([
                'services_banner' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$page_data->services_banner));

            $ext = $request->file('services_banner')->extension();
            $final_name = 'banner_services_'.time().'.'.$ext;

            $request->file('services_banner')->move(public_path('uploads/'),$final_name);

            $page_data->services_banner = $final_name;
        }

        $page_data->services_heading = $request->services_heading;
        $page_data->services_seo_title = $request->services_seo_title;
        $page_data->services_seo_meta_description = $request->services_seo_meta_description;
        $page_data->update();

        return redirect()->back()->with('success', 'Data is updated successfully.');
    }

    //--------------------------------------------------- Portfolio --------------------------------------------//

    public function portfolios()
    {
        $page_data = PageItem::where('id',1)->first();
        return view('admin.page_portfolios', compact('page_data'));
    }

    public function portfolios_update(Request $request)
    {
        $page_data = PageItem::where('id',1)->first();

        $request->validate([
            'portfolios_heading' => 'required'
        ]); 

        if ($request->hasFile('portfolios_banner')) {
            $request->validate([
                'portfolios_banner' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$page_data->portfolios_banner));

            $ext = $request->file('portfolios_banner')->extension();
            $final_name = 'banner_portfolios_'.time().'.'.$ext;

            $request->file('portfolios_banner')->move(public_path('uploads/'),$final_name);

            $page_data->portfolios_banner = $final_name;
        }

        $page_data->portfolios_heading = $request->portfolios_heading;
        $page_data->portfolios_seo_title = $request->portfolios_seo_title;
        $page_data->portfolios_seo_meta_description = $request->portfolios_seo_meta_description;
        $page_data->update();

        return redirect()->back()->with('success', 'Data is updated successfully.');
    }

    //--------------------------------------------------- About --------------------------------------------//

    public function about()
    {
        $page_data = PageItem::where('id',1)->first();
        return view('admin.page_about', compact('page_data'));
    }

    public function about_update(Request $request)
    {
        $page_data = PageItem::where('id',1)->first();

        $request->validate([
            'about_heading' => 'required',
            'about_description' => 'required'
        ]); 

        if ($request->hasFile('about_photo')) {
            $request->validate([
                'about_photo' => 'image|mimes:jpg,jpeg,png,gif'
            ]);

            if ($page_data->about_photo) {
                unlink(public_path('uploads/'.$page_data->about_photo));
            }

            $ext = $request->file('about_photo')->extension();
            $final_name = 'photo_about_'.time().'.'.$ext;

            $request->file('about_photo')->move(public_path('uploads/'),$final_name);

            $page_data->about_photo = $final_name;
        }

        if ($request->hasFile('about_banner')) {
            $request->validate([
                'about_banner' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$page_data->about_banner));

            $ext = $request->file('about_banner')->extension();
            $final_name = 'banner_about_'.time().'.'.$ext;

            $request->file('about_banner')->move(public_path('uploads/'),$final_name);

            $page_data->about_banner = $final_name;
        }

        $page_data->about_heading = $request->about_heading;
        $page_data->about_description = $request->about_description;
        $page_data->about_seo_title = $request->about_seo_title;
        $page_data->about_seo_meta_description = $request->about_seo_meta_description;
        $page_data->update();

        return redirect()->back()->with('success', 'Data is updated successfully.');
    }

    public function about_photo_delete()
    {
        $row_data = PageItem::where('id', 1)->first();
        unlink(public_path('uploads/'.$row_data->about_photo));
        $row_data->about_photo = '';
        $row_data->update();

        return redirect()->back()->with('success', 'Photo is deleted successfully.');
    }

    //--------------------------------------------------- Contact --------------------------------------------//

    public function contact()
    {
        $page_data = PageItem::where('id',1)->first();
        return view('admin.page_contact', compact('page_data'));
    }

    public function contact_update(Request $request)
    {
        $page_data = PageItem::where('id',1)->first();

        $request->validate([
            'contact_heading' => 'required',
            'contact_address' => 'required',
            'contact_email' => 'required',
            'contact_phone' => 'required',
            'contact_map_iframe' => 'required'
        ]); 

        if ($request->hasFile('contact_banner')) {
            $request->validate([
                'contact_banner' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$page_data->contact_banner));

            $ext = $request->file('contact_banner')->extension();
            $final_name = 'banner_contact_'.time().'.'.$ext;

            $request->file('contact_banner')->move(public_path('uploads/'),$final_name);

            $page_data->contact_banner = $final_name;
        }

        $page_data->contact_heading = $request->contact_heading;
        $page_data->contact_address = $request->contact_address;
        $page_data->contact_email = $request->contact_email;
        $page_data->contact_phone = $request->contact_phone;
        $page_data->contact_map_iframe = $request->contact_map_iframe;
        $page_data->contact_seo_title = $request->contact_seo_title;
        $page_data->contact_seo_meta_description = $request->contact_seo_meta_description;
        $page_data->update();

        return redirect()->back()->with('success', 'Data is updated successfully.');
    }
}
