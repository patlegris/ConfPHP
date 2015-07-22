<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::published()->get();
        return view('blog.index', compact('posts'));
    }

    public function showPostByCategory($id)
    {
        $posts = Category::find($id)->posts()->published()->get();
        return view('blog.category', compact('posts'));
    }

    public function showPost($id, $slug = '')
    {
        $post = Post::published($id)->first();
        return view('blog.single', compact('post'));
    }

    public function showTag($id)
    {
        $posts = Tag::find($id)->posts;
        return view('blog.tag', compact('posts'));
    }
}
