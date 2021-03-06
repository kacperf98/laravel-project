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

        @auth
            <div class="content">
                <a href="{{ route('users.create') }}" class="button">Create User</a>
                <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="button">Edit User</a>
            </div>
        @endauth
    </div>
@endsection
