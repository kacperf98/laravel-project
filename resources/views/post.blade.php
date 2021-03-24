@extends('layout')

@section('content')
    <div id="newsletter">
        <div id="welcome" class="container">
            <div class="title">
                <h2>Posts</h2>
            </div>

            <ul class="style1">
                @forelse($posts as $post)
                <li>
                    <h2 class="title">
                        <a href="{{ $post->path() }}">
                            {{ $post->title }}
                        </a>
                    </h2>

                    <p class="content">
                        {!! $post->excerpt !!}
                    </p>
                </li>
                @empty
                    <p>No relevant posts yet.</p>
                @endforelse
            </ul>
        </div>

        @auth
            <div class="content">
                <a href="posts/create" class="button">Create Post</a>
            </div>
        @endauth
    </div>
@endsection
