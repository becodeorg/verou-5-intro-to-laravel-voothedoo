<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Users extends Controller
{
    public function index()
    {
        $users = User::all();
        return view ('users.index', [
            'users'=> $users,
        ]);
    }

    public function show($id)
    {
        $user = User::find($id);
        return view ('users.show', [
            'user'=> $user,
        ]);
    }

    public function destroy ($id)
    {
        User::destroy($id);
        return redirect ('/users');
    }
}
