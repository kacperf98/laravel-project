@extends('layout')

@section('content')
    <div id="wrapper1">
        <div id="welcome" class="container">
            <div class="title">
                <h2>All Users</h2>
                @foreach ($users as $user)
                    <li>{{ $user->name }}</li>
                @endforeach
            </div>
        </div>
    </div>
@endsection
