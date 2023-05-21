<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class AdminEducationController extends Controller
{
    public function index()
    {
        $all_data = Education::orderBy('item_order','asc')->get();
        return view('admin.education_show', compact('all_data'));
    }

    public function add()
    {
        return view('admin.education_add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'degree' => 'required',
            'institute' => 'required',
            'time' => 'required',
            'item_order' => 'required'
        ]);

        $obj = new Education();
        $obj->degree = $request->degree;
        $obj->institute = $request->institute;
        $obj->time = $request->time;
        $obj->item_order = $request->item_order;
        $obj->save();

        return redirect()->route('admin_education_show')->with('success', 'Data is inserted successfully.');
    }
}
