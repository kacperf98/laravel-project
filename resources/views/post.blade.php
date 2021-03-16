@extends('layout')

@section('content')
    <div id="newsletter">
        <div id="welcome" class="container">
            <div class="title">
                <h2>Posts</h2>
            </div>

            <ul class="style1">
                @foreach($posts as $post)
                <li>
                    <h2 class="title">
                        <a href="{{ route('posts.show', $post) }}">
                            {{ $post->title }}
                        </a>
                    </h2>
                    <p class="content">{!! $post->excerpt !!}</p>
                </li>
                @endforeach
            </ul>
        </div>

        <div class="content">
            <a href="posts/create" class="button">Create Post</a>
        </div>
    </div>
@endsection
