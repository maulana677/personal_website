<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\PageItem;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\PortfolioPhoto;
use App\Models\PortfolioVideo;
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

    public function detail($slug)
    {
        $portfolios = Portfolio::orderBy('id', 'asc')->get();
        $portfolio_detail = Portfolio::where('slug',$slug)->first();
        $portfolio_photos = PortfolioPhoto::where('portfolio_id', $portfolio_detail->id)->get();
        $portfolio_videos = PortfolioVideo::where('portfolio_id', $portfolio_detail->id)->get();
        return view('frontend.portfolio_detail', compact('portfolio_detail', 'portfolios', 'portfolio_photos', 'portfolio_videos'));
    }
}
