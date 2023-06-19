<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Archive;
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
        $post_categories = PostCategory::orderBy('category_name', 'asc')->get();
        $post_detail = Post::with('rPostCategory')->where('slug',$slug)->first();
        $archives = Archive::orderBy('id', 'desc')->get();
        return view('frontend.post', compact('post_detail', 'posts', 'post_categories', 'archives'));
    }

    public function category($slug)
    {
        $category_detail = PostCategory::where('category_slug',$slug)->first();
        $posts = Post::orderBy('id', 'desc')->where('post_category_id', $category_detail->id)->paginate(6);
        $page_data = PageItem::where('id', 1)->first();
        return view('frontend.category', compact('posts','page_data', 'category_detail'));
    }

    public function archive($month, $year)
    {
        $posts = Post::orderBy('id', 'desc')->get();
        $page_data = PageItem::where('id', 1)->first();
        return view('frontend.archive', compact('posts', 'page_data', 'month', 'year'));
    }

    public function search(Request $request)
    {
        $search_text = $request->search_text;
        $search_text_filter = '%'.$search_text.'%';
        $posts = Post::orderBy('id', 'desc')->where('title', 'like', $search_text_filter)->orWhere('description', 'like', $search_text_filter)->get();
        $page_data = PageItem::where('id', 1)->first();
        return view('frontend.search', compact('posts', 'page_data', 'search_text'));
    }
}
