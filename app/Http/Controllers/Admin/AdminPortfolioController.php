<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use Illuminate\Http\Request;

class AdminPortfolioController extends Controller
{
    public function index()
    {
        $all_data = Portfolio::with('rPortfolioCategory')->orderBy('id','asc')->get();
        return view('admin.portfolio_show', compact('all_data'));
    }

    public function add()
    {
        $portfolio_categories = PortfolioCategory::get();
        return view('admin.portfolio_add', compact('portfolio_categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:services',
            'description' => 'required',
            'photo' => 'required|image|mimes:jpg,jpeg,png,gif',
            'banner' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);

        $obj = new Portfolio();

        $ext = $request->file('photo')->extension();
        $final_name = 'portfolio_photo_'.time().'.'.$ext;
        $request->file('photo')->move(public_path('uploads/'),$final_name);
        $obj->photo = $final_name;

        $ext1 = $request->file('banner')->extension();
        $final_name1 = 'portfolio_banner_'.time().'.'.$ext1;
        $request->file('banner')->move(public_path('uploads/'),$final_name1);
        $obj->banner = $final_name1;

        $obj->portfolio_category_id = $request->portfolio_category_id;
        $obj->name = $request->name;
        $obj->slug = $request->slug;
        $obj->description = $request->description;
        $obj->project_client = $request->project_client;
        $obj->project_company = $request->project_company;
        $obj->project_start_date = $request->project_start_date;
        $obj->project_end_date = $request->project_end_date;
        $obj->project_cost = $request->project_cost;
        $obj->project_website = $request->project_website;
        $obj->seo_title = $request->seo_title;
        $obj->seo_meta_description = $request->seo_meta_description;
        $obj->save();

        return redirect()->route('admin_portfolio_show')->with('success', 'Data is inserted successfully.');
    }
}
