@extends('layout')

@section('content')
    <div id="newsletter">
        <ul class="style1">
                <li>
                    <h2 class="title">{{ $post->title }}</h2>
                    <p class="content">{{ $post->body }}</p>
                </li>
        </ul>
    </div>
@endsection
