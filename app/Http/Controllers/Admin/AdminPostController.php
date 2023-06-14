<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminPostController extends Controller
{
    public function index()
    {
        $all_data = Post::with('rPostCategory')->orderBy('id','asc')->get();
        return view('admin.post_show', compact('all_data'));
    }

    public function add()
    {
        $post_categories = PostCategory::get();
        return view('admin.post_add', compact('post_categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:posts',
            'short_description' => 'required',
            'description' => 'required',
            'photo' => 'required|image|mimes:jpg,jpeg,png,gif',
            'banner' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);

        $obj = new Post();

        $ext = $request->file('photo')->extension();
        $final_name = 'post_photo_'.time().'.'.$ext;
        $request->file('photo')->move(public_path('uploads/'),$final_name);
        $obj->photo = $final_name;

        $ext1 = $request->file('banner')->extension();
        $final_name1 = 'post_banner_'.time().'.'.$ext1;
        $request->file('banner')->move(public_path('uploads/'),$final_name1);
        $obj->banner = $final_name1;

        $obj->post_category_id = $request->post_category_id;
        $obj->title = $request->title;
        $obj->slug = $request->slug;
        $obj->short_description = $request->short_description;
        $obj->description = $request->description;
        $obj->show_comment = $request->show_comment;
        $obj->seo_title = $request->seo_title;
        $obj->seo_meta_description = $request->seo_meta_description;
        $obj->save();

        return redirect()->route('admin_post_show')->with('success', 'Data is inserted successfully.');
    }

    public function edit($id)
    {
        $post_categories = PostCategory::get();
        $row_data = Post::where('id',$id)->first();
        return view('admin.post_edit', compact('row_data', 'post_categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'slug' => ['required', 'alpha_dash', Rule::unique('posts')->ignore($id)],
            'short_description' => 'required',
            'description' => 'required'
        ]);

        $obj = Post::where('id', $id)->first();

        if ($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$obj->photo));

            $ext = $request->file('photo')->extension();
            $final_name = 'post_photo_'.time().'.'.$ext;

            $request->file('photo')->move(public_path('uploads/'),$final_name);

            $obj->photo = $final_name;
        }

        if ($request->hasFile('banner')) {
            $request->validate([
                'banner' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$obj->banner));

            $ext = $request->file('banner')->extension();
            $final_name = 'post_banner_'.time().'.'.$ext;

            $request->file('banner')->move(public_path('uploads/'),$final_name);

            $obj->banner = $final_name;
        }

        $obj->post_category_id = $request->post_category_id;
        $obj->title = $request->title;
        $obj->slug = $request->slug;
        $obj->short_description = $request->short_description;
        $obj->description = $request->description;
        $obj->show_comment = $request->show_comment;
        $obj->seo_title = $request->seo_title;
        $obj->seo_meta_description = $request->seo_meta_description;
        $obj->update();

        return redirect()->route('admin_post_show')->with('success', 'Data is updated successfully.');
    }

    public function delete($id)
    {
        $row_data = Post::where('id',$id)->first();
        unlink(public_path('uploads/'.$row_data->photo));
        unlink(public_path('uploads/'.$row_data->banner));
        $row_data->delete();

        return redirect()->back()->with('success', 'Data is deleted successfully.');
    }
}
