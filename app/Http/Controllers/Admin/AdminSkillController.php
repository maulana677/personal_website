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
}
