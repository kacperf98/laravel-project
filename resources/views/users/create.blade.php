@extends('layout')

@section('content')
    <div id="wrapper1">
        <div id="welcome" class="container">
            <div class="content">
                <div class="title">
                    <h2>Add User</h2>
                </div>
                <form method="POST" action="/users">
                    {{ csrf_field() }}

                    <div class="field">
                        <label class="label" for="name">Name</label>

                        <div class="control">
                            <input class="text" type="text" name="name" id="name" required>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="email">Email Address</label>

                        <div class="control">
                            <input class="text" type="email" name="email" id="email" required>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="password">Password</label>

                        <div class="control">
                            <input class="text" type="password" name="password" id="password" required>
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
