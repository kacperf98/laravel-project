@extends('layout')

@section('content')
    <div id="newsletter">
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
@endsection
