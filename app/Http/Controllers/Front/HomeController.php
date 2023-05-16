<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\HomePageItem;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $page_data = HomePageItem::where('id',1)->first();
        return view('frontend.home', compact('page_data'));
    }
}
