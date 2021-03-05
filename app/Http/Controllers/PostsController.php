<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Post;

class PostsController extends Controller
{
    public function show($slug)
    {
        return view('posts/post', [
            'post' => Post::where('slug', $slug)->firstOrFail()
        ]);
    }
}
