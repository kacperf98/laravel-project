@extends('layout')

@section('content')
    <h1>All Users</h1>

    @foreach ($users as $user)
        <li>{{ $user->name }}</li>
    @endforeach

    <h2>Add User</h2>

    <form method="POST" action="/users">
        {{ csrf_field() }}

        <p>
            <input type="text" name="name" placeholder="Name" required>
        </p>

        <p>
            <input type="email" name="email" placeholder="Email Address" required>
        </p>

        <p>
            <input type="password" name="password" placeholder="Password" required>
        </p>

        <p>
            <button type="submit">Add User</button>
        </p>
    </form>
@endsection
