<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return Profile::with('user')->get();
    }
    public function show()
    {
        return Post::with('showpost')->get();
    }

    







    
// public function showPosts($usersId)
// {
//     $users = User::find($usersId);
//     $posts = $users->posts;
//     return view('users.posts', compact('users', 'posts'));
// }
// public function showRoles($usersId)
// {
//     $users = User::find($usersId);
//     $roles = $users->roles;
//     return view('users.roles', compact('users', 'roles'));
// }
}
