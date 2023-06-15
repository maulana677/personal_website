<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\PageItem;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(6);
        $page_data = PageItem::where('id', 1)->first();
        return view('frontend.posts', compact('posts','page_data'));
    }
}
