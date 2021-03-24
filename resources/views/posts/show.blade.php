@extends('layout')

@section('content')
    <div id="newsletter">
        <div id="welcome" class="container">
            <ul class="style1">
                <li>
                    <h2 class="title">
                        {{ $post->title }}
                    </h2>

                    <p class="content">
                        {!! $post->body !!}
                    </p>

                    <p style="margin-top: 1em">
                        @foreach($post->tags as $tag)
                            <a href="{{ route('posts.index', ['tag' => $tag->name]) }}">
                                {{ $tag->name }}
                            </a>
                        @endforeach
                    </p>
                </li>
            </ul>
        </div>

        @auth
            <div class="content">
                <a href="{{ $post->id }}/edit" class="button">Edit Post</a>
            </div>
        @endauth
    </div>
@endsection
