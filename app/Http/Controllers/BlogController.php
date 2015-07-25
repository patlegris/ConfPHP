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
        return view('front.blog.index', compact('posts'));
    }

    /**
     * @param $id
     * @param $slug
     * @return \Illuminate\View\View
     */
    public function showPost($id, $slug)
    {
        $posts = Post::find($id)->first();
        return view('front.post.single', compact('posts'));
    }

    public function showTag($id)
    {
        $tag = Tag::find($id);
        return view("front.tag.single", compact('tag'));
    }

    public function about()
    {
        return view('front.about.about');
    }

    public function contact()
    {
        return view('front.contact.contact');
    }
}
