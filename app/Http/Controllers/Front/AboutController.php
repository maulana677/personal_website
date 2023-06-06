<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\PageItem;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $page_data = PageItem::where('id', 1)->first();
        return view('frontend.about', compact('page_data'));
    }
}
