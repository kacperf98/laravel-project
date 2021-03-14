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
                        <a href="posts/{{ $post->id }}">
                            {{ $post->title }}
                        </a>
                    </h2>
                    <p class="content">{!! $post->excerpt !!}</p>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
