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
            <div class="content">
                <h2>Add User</h2>
                <form method="POST" action="/users">
                    {{ csrf_field() }}

                    <input class="text" type="text" name="name" placeholder="Name" required>
                    <input class="text" type="email" name="email" placeholder="Email Address" required>
                    <input class="text" type="password" name="password" placeholder="Password" required>
                    <button class = "button" type="submit">Add User</button>
                </form>
            </div>
        </div>
    </div>
@endsection
