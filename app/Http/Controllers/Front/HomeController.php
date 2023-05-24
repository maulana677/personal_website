<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\Experience;
use App\Models\HomePageItem;
use App\Models\Skill;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $page_data = HomePageItem::where('id',1)->first();
        $left_skills = Skill::where('side','Left')->get();
        $right_skills = Skill::where('side','Right')->get();
        $education = Education::orderBy('item_order', 'asc')->get();
        $experiences = Experience::orderBy('item_order', 'asc')->get();
        $testimonials = Testimonial::orderBy('id', 'asc')->get();
        return view('frontend.home', compact('page_data', 'left_skills', 'right_skills', 'education', 'experiences', 'testimonials'));
    }
}
