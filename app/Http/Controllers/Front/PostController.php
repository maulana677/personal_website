<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\PageItem;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(6);
        $page_data = PageItem::where('id', 1)->first();
        return view('frontend.posts', compact('posts','page_data'));
    }

    public function detail($slug)
    {
        $posts = Post::orderBy('id', 'desc')->take(5)->get();
        $post_category = PostCategory::orderBy('id', 'asc')->get();
        $post_detail = Post::with('rPostCategory')->where('slug',$slug)->first();
        return view('frontend.post', compact('post_detail', 'posts', 'post_category'));
    }
}
