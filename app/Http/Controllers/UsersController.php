<?php

namespace App\Http\Controllers;

use App\Models\Post;
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

        return view('user', ['users' => $users]);
    }

    /**
     * Show the form to create a new user.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateUser();

        $user = new User(request(['name', 'email', 'password']));
        $user->save();

        return redirect(route('users.index'));
    }

    /**
     * Show a view to edit user.
     *
     * @return \Illuminate\View\View
     */
    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    /**
     * Store the edited user.
     *
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(User $user, Request $request)
    {
        $user->update($this->validateUser());

        return redirect(route('users.index'));
    }

    /**
     * Delete the User.
     *
     */
    public function destroy()
    {

    }

    /**
     * Make validation for users.
     *
     * @return \Illuminate\Http\Request  $request
     */
    protected function validateUser()
    {
        return request()->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:filter',
            'password' => 'required'
        ]);
    }
}
