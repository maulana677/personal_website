<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomePageItem;
use Illuminate\Http\Request;

class AdminHomePageController extends Controller
{
    public function banner()
    {
        $page_data = HomePageItem::where('id',1)->first();
        return view('admin.home_banner_show', compact('page_data'));
    }

    public function banner_update(Request $request)
    {
        $page_data = HomePageItem::where('id',1)->first();

        $request->validate([
            'banner_person_name' => 'required'
        ]);

        if ($request->hasFile('banner_photo')) {
            $request->validate([
                'banner_photo' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$page_data->banner_photo));

            $ext = $request->file('banner_photo')->extension();
            $final_name = 'home_banner'.'.'.$ext;

            $request->file('banner_photo')->move(public_path('uploads/'),$final_name);

            $page_data->banner_photo = $final_name;
        }

        $page_data->banner_title = $request->banner_title;
        $page_data->banner_person_name = $request->banner_person_name;
        $page_data->banner_person_designation = $request->banner_person_designation;
        $page_data->banner_description = $request->banner_description;
        $page_data->banner_button_text = $request->banner_button_text;
        $page_data->banner_button_url = $request->banner_button_url;
        $page_data->update();

        return redirect()->back()->with('success', 'Data is updated successfully.');
    }

    //-------------------------------------------- About --------------------------------------------//

    public function about()
    {
        $page_data = HomePageItem::where('id',1)->first();
        return view('admin.home_about_show', compact('page_data'));
    }

    public function about_update(Request $request)
    {
        $page_data = HomePageItem::where('id',1)->first();

        $request->validate([
            'about_title' => 'required'
        ]);

        if ($request->hasFile('about_photo')) {
            $request->validate([
                'about_photo' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$page_data->about_photo));

            $ext = $request->file('about_photo')->extension();
            $final_name = 'home_about'.'.'.$ext;

            $request->file('about_photo')->move(public_path('uploads/'),$final_name);

            $page_data->about_photo = $final_name;
        }

        $page_data->about_subtitle = $request->about_subtitle;
        $page_data->about_title = $request->about_title;
        $page_data->about_description = $request->about_description;
        $page_data->about_person_name = $request->about_person_name;
        $page_data->about_person_phone = $request->about_person_phone;
        $page_data->about_person_email = $request->about_person_email;
        $page_data->about_icon1 = $request->about_icon1;
        $page_data->about_icon1_url = $request->about_icon1_url;
        $page_data->about_icon2 = $request->about_icon2;
        $page_data->about_icon2_url = $request->about_icon2_url;
        $page_data->about_icon3 = $request->about_icon3;
        $page_data->about_icon3_url = $request->about_icon3_url;
        $page_data->about_icon4 = $request->about_icon4;
        $page_data->about_icon4_url = $request->about_icon4_url;
        $page_data->about_icon5 = $request->about_icon5;
        $page_data->about_icon5_url = $request->about_icon5_url;
        $page_data->about_status = $request->about_status;
        $page_data->update();

        return redirect()->back()->with('success', 'Data is updated successfully.');
    }

    //-------------------------------------------- Skill --------------------------------------------//

    public function skill()
    {
        $page_data = HomePageItem::where('id',1)->first();
        return view('admin.home_skill_show', compact('page_data'));
    }

    public function skill_update(Request $request)
    {
        $page_data = HomePageItem::where('id',1)->first();

        $page_data->skill_subtitle = $request->skill_subtitle;
        $page_data->skill_title = $request->skill_title;
        $page_data->skill_status = $request->skill_status;
        $page_data->update();

        return redirect()->back()->with('success', 'Data is updated successfully.');
    }
}
