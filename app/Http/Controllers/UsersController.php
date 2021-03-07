<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     *
     * Show a list of all of the application's users.
     *
     */
    public function index()
    {
        $users = User::all();

        return view('users/index', ['users' => $users]);
    }

    /**
     *
     * Create a new user and save into DB.
     *
     */
    public function store()
    {
        $user = new User;

        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->save();

        return back();
    }
}
