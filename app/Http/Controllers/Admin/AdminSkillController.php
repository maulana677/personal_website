<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class AdminSkillController extends Controller
{
    public function index()
    {
        $all_data = Skill::get();
        return view('admin.skill_show', compact('all_data'));
    }

    public function add()
    {
        return view('admin.skill_add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'percentage' => 'required',
        ]);

        $obj = new Skill();
        $obj->name = $request->name;
        $obj->percentage = $request->percentage;
        $obj->side = $request->side;
        $obj->save();

        return redirect()->back()->with('success', 'Data is updated successfully.');
    }
}
