<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
        $user = \App\User::findOrFail($id);
        return view("posts.show")
            ->with("title", $user->name)
            ->with("posts", $user->post);
    }
}
