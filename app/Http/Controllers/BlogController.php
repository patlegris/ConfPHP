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
     * @return list of the posts, this is the main page
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
     * @return the view of the active post
     */
    public function showPost($id, $slug)
    {
        if (!$post = Post::where('slug', $id)->first())
            $post = Post::find((int)$id);
        return view('front.blog.single', compact('post'));
    }

    /**
     * @return accesss to the page "about"
     */
    public function about()
    {
        return view('front.blog.about');
    }

    /**
     * @return accesss to the page "contact"
     */
    public function contact()
    {
        return view('front.contact.contact');
    }
}
