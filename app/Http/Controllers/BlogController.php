<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $posts = Post::all()->where('status', 'publish');
        return view('blog.index', compact('posts'));
    }

    /**
     * @param $id
     * @param $slug
     * @return \Illuminate\View\View
     */
    public function showPost($id, $slug)
    {
        $post = Post::find($id)->first();
        return view('blog.single', compact('post'));
    }

}
