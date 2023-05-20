<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class AdminEducationController extends Controller
{
    public function index()
    {
        $all_data = Education::orderBy('item_order', 'asc')->get();
        return view('admin.eduqation_show', compact('all_data'));
    }
}
