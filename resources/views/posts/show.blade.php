@extends('layout')

@section('content')
    <div id="newsletter">
        <div id="welcome" class="container">
            <ul class="style1">
                    <li>
                        <h2 class="title">{{ $post->title }}</h2>
                        <p class="content">{{ $post->body }}</p>
                    </li>
            </ul>
        </div>

        <div class="content">
            <a href="{{ $post->id }}/edit" class="button">Edit Post</a>
        </div>
    </div>
@endsection
