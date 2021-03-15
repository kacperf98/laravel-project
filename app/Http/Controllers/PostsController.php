<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

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
        $validated = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'excerpt' => 'required',
            'body' => 'required',
        ]);

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
    public function update($id, Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'excerpt' => 'required',
            'body' => 'required',
        ]);

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
