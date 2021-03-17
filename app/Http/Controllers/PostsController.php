<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Show a list of all Posts.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $posts = Post::latest()->get();

        return view('post', ['posts' => $posts]);
    }

    /**
     * Show a single Post.
     *
     * @return \Illuminate\View\View
     */
    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form to create a new blog post.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a new blog post.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Post::create($request->validate([
            'title' => 'required|unique:posts|max:255',
            'excerpt' => 'required',
            'body' => 'required',
        ]));

        return redirect('/posts');
    }

    /**
     * Show a view to edit Post.
     *
     * @return \Illuminate\View\View
     */
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Store the edited Post.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Post $post, Request $request)
    {
        $post->update($request->validate([
            'title' => 'required|max:255',
            'excerpt' => 'required',
            'body' => 'required'
        ]));

        return redirect()->route('posts.show', $post);
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
