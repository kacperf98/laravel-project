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

        return view('posts/show', ['post' => $post]);
    }

    /**
     *
     * Show a view to create a new Post.
     *
     */
    public function create()
    {

    }

    /**
     *
     * Store the new created Post.
     *
     */
    public function store()
    {

    }

    /**
     *
     * Show a view to edit Post.
     *
     */
    public function edit()
    {

    }

    /**
     *
     * Store the edited Post.
     *
     */
    public function update()
    {

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
