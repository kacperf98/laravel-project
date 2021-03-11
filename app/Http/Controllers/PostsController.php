<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();

        return view('post', ['posts' => $posts]);
    }

    public function show($id)
    {
        $post = Post::find($id);

        return view('posts/show', ['post' => $post]);
    }
}
