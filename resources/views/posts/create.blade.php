@extends('layout')

@section('content')
    <div id="wrapper1">
        <div id="welcome" class="container">
            <div class="content">
                <div class="title">
                    <h2>Add Post</h2>
                </div>
                <form method="POST" action="/posts">
                    {{ csrf_field() }}

                    <div class="field">
                        <label class="label" for="title">Title</label>

                        <div class="control">
                            <input class="text @error('title') is-invalid @enderror"
                                   type="text"
                                   name="title"
                                   id="title"
                                   value="{{ old('title') }}">

                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="excerpt">Excerpt</label>

                        <div class="control">
                            <textarea class="textarea @error('excerpt') is-invalid @enderror"
                                      name="excerpt"
                                      id="excerpt"
                            >{{ old('excerpt') }}</textarea>

                            @error('excerpt')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="body">Body</label>

                        <div class="control">
                            <textarea class="textarea @error('body') is-invalid @enderror"
                                      name="body"
                                      id="body"
                            >{{ old('body') }}</textarea>

                            @error('body')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="body">Tags</label>

                        <div class="control">
                            <select name="tags[]" multiple>

                                @foreach($tags as $tag)
                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                @endforeach

                                @error('tags')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </select>
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
