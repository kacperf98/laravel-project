@extends('layout')

@section('content')
    <div id="wrapper1">
        <div id="welcome" class="container">
            <div class="content">
                <div class="title">
                    <h2>Update Post</h2>
                </div>
                <form method="POST" action="/posts/{{ $post->id }}">
                    {{ csrf_field() }}
                    @method('PUT')

                    <div class="field">
                        <label class="label" for="title">Title</label>

                        <div class="control">
                            <input class="text" type="text" name="title" id="title" value="{{ $post->title }}">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="excerpt">Excerpt</label>

                        <div class="control">
                            <textarea class="textarea" name="excerpt" id="excerpt">{{ $post->excerpt }}</textarea>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="body">Body</label>

                        <div class="control">
                            <textarea class="textarea" name="body" id="body">{{ $post->body }}</textarea>
                        </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
