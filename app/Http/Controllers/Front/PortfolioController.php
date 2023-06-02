<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\PageItem;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::orderBy('id', 'asc')->get();
        $portfolios_categories = PortfolioCategory::orderBy('id', 'asc')->get();
        $page_data = PageItem::where('id', 1)->first();
        return view('frontend.portfolios', compact('portfolios','portfolios_categories','page_data'));
    }
}
