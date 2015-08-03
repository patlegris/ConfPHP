<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use App\Comment;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::all()->sortByDesc('date_start');
        return view('dashboard.dashboard', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(PostRequest $request)
    {
        $post = Post::create($request->all());
        $post->tags()->attach($request->input('tags'));
        if ($request->hasFile('thumbnail_link')) {
            $file = $request->file('thumbnail_link');
            $ext = $file->getClientOriginalExtension();
            $fileName = $post->slug . '.' . $ext;
            $file->move('./assets/images/confs', $fileName);
            $post->thumbnail_link = $fileName;
            $post->save();
        }
        return redirect()->to('dashboard.dashboard')->with('message', Alert::message('La conférence "' . $post->title . '"
         est créée', 'success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $tags = Tag::all();
        $title = 'Editer une conférence';
        return view('dashboard.edit', compact('post', 'tags', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request $request
     * @param  int $id
     * @return Response
     */
    public function update($id, PostRequest $request)
    {
        $post = Post::find($id);
        $post->tags()->detach();
        $post->update($request->all());
        $post->tags()->attach($request->input('tags'));
        if ($request->hasFile('thumbnail_link')) {
            $file = $request->file('thumbnail_link');
            $ext = $file->getClientOriginalExtension();
            $fileName = $post->slug . '.' . $ext;
            $file->move('./assets/images/confs', $fileName);
            $post->thumbnail_link = $fileName;
            $post->save();
        }
        return redirect()->to('dashboard.dashboard')->with('message', Alert::message('conférence "' . $post->title . '"
        modifiée avec succès', 'info'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
        return 'La conférence est supprimée de l\'agenda';
    }

    public function statusChange($id)
    {
        $post = Post::find($id);
        if (($post->status) == 'publish') {
            $post->status = 'un-publish';
        } else {
            $post->status = 'publish';
        }
        $post->save();
        return redirect('dashboard');
    }

//    public function softDelete($id)
//    {
//        $post = Post::delete($id);
//    }
}
