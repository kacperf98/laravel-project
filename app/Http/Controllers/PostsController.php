<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
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
        if(request('tag')) {
            $posts = Tag::where('name', request('tag'))->firstOrFail()->posts;
        } else {
            $posts = Post::latest()->get();
        }

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
        $tags = Tag::all();
        return view('posts.create', ['tags' => Tag::all()]);
    }

    /**
     * Store a new blog post.
     *
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validatePost();

        $post = new Post(request(['title', 'excerpt', 'body']));
        $post->user_id = 1;
        $post->save();

        $post->tags()->attach(request('tags'));

        return redirect(route('posts.index'));
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
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Post $post, Request $request)
    {
        $post->update($this->validatePost());

        return redirect($post->path());
    }

    /**
     * Delete the Post.
     *
     */
    public function destroy()
    {

    }

    /**
     * Make validation for posts.
     *
     * @return \Illuminate\Http\Request  $request
     */
    protected function validatePost()
    {
        return request()->validate([
            'title' => 'required|max:255',
            'excerpt' => 'required',
            'body' => 'required',
            'tags' => 'exists:tags,id'
        ]);
    }
}
