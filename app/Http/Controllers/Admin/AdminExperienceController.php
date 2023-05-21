<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;

class AdminExperienceController extends Controller
{
    public function index()
    {
        $all_data = Experience::orderBy('item_order','asc')->get();
        return view('admin.experience_show', compact('all_data'));
    }

    public function add()
    {
        return view('admin.experience_add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'company' => 'required',
            'designation' => 'required',
            'time' => 'required',
            'item_order' => 'required'
        ]);

        $obj = new Experience();
        $obj->company = $request->company;
        $obj->designation = $request->designation;
        $obj->time = $request->time;
        $obj->item_order = $request->item_order;
        $obj->save();

        return redirect()->route('admin_experience_show')->with('success', 'Data is inserted successfully.');
    }
}
