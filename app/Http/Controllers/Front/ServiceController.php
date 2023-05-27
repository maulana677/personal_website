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
        $services = Service::orderBy('item_order', 'asc')->get();
        $page_data = PageItem::where('id', 1)->first();
        return view('frontend.services', compact('services','page_data'));
    }
}
