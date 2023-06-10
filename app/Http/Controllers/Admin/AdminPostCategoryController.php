<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminPostCategoryController extends Controller
{
    public function index()
    {
        $all_data = PostCategory::orderBy('id','asc')->get();
        return view('admin.post_category_show', compact('all_data'));
    }

    public function add()
    {
        return view('admin.post_category_add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
            'category_slug' => 'required|alpha_dash|unique:post_categories'
        ]);

        $obj = new PostCategory();

        $obj->category_name = $request->category_name;
        $obj->category_slug = $request->category_slug;
        $obj->save();

        return redirect()->route('admin_post_category_show')->with('success', 'Data is inserted successfully.');
    }

    public function edit($id)
    {
        $row_data = PostCategory::where('id',$id)->first();
        return view('admin.post_category_edit', compact('row_data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required',
            'category_slug' => ['required', 'alpha_dash', Rule::unique('post_categories')->ignore($id)],
        ]);

        $obj = PostCategory::where('id', $id)->first();

        $obj->category_name = $request->category_name;
        $obj->category_slug = $request->category_slug;
        $obj->update();

        return redirect()->route('admin_post_category_show')->with('success', 'Data is updated successfully.');
    }

    public function delete($id)
    {
        $row_data = PostCategory::where('id',$id)->first();
        $row_data->delete();

        return redirect()->back()->with('success', 'Data is deleted successfully.');
    }
}
