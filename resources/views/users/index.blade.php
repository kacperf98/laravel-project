<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head>
<body>

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

</body>
</html>
