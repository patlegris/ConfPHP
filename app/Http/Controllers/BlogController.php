<?php

namespace App\Http\Controllers;

use App\Tag;
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
        $posts = Post::all()
            ->sortByDesc('date_start')
            ->where('status', 'publish');
        return view('front.main', compact('posts'));
    }

    /**
     * @param $id
     * @param $slug
     * @return \Illuminate\View\View
     */
    public function showPost($id, $slug)
    {
        $post = Post::find($id)->first();
        return view('post.single', compact('post'));
    }

    public function showTag($id)
    {
        $tag = Tag::find($id);
        return view("tag.single", compact('tag'));
    }

    public function about()
    {
        return view('front.about');
    }

    public function contact()
    {
        return view('front.contact');
    }
}
