<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::all()->get()->where('status', 'publish');
        return view('blog.index', compact('posts'));
    }

    public function showPost($id, $slug = '')
    {
        $post = Post::published($id)->first();
        return view('blog.single', compact('post'));
    }

}
