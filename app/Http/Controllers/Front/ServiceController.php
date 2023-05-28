<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\PageItem;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('item_order', 'asc')->paginate(9);
        $page_data = PageItem::where('id', 1)->first();
        return view('frontend.services', compact('services','page_data'));
    }

    public function detail($slug)
    {
        $services = Service::orderBy('item_order', 'asc')->get();
        $service_detail = Service::where('slug',$slug)->first();
        return view('frontend.service_detail', compact('service_detail', 'services'));
    }
}
