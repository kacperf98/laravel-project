<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostsController extends Controller
{
    /**
     *
     * Show a list of all Posts.
     *
     */
    public function index()
    {
        $posts = Post::latest()->get();

        return view('post', ['posts' => $posts]);
    }

    /**
     *
     * Show a single Post.
     *
     */
    public function show($id)
    {
        $post = Post::find($id);

        return view('posts.show', ['post' => $post]);
    }

    /**
     *
     * Show a view to create a new Post.
     *
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     *
     * Store the new created Post and save into DB..
     *
     */
    public function store()
    {
        $post = new Post();

        $post->title = request('title');
        $post->excerpt = request('excerpt');
        $post->body = request('body');

        $post->save();

        return redirect('/posts');
    }

    /**
     *
     * Show a view to edit Post.
     *
     */
    public function edit($id)
    {
        $post = Post::find($id);

        return view('posts.edit', ['post' => $post]);
    }

    /**
     *
     * Store the edited Post.
     *
     */
    public function update($id)
    {
        $post = Post::find($id);

        $post->title = request('title');
        $post->excerpt = request('excerpt');
        $post->body = request('body');

        $post->save();

        return redirect('/posts/' . $post->id);
    }

    /**
     *
     * Delete the Post.
     *
     */
    public function destroy()
    {

    }
}
