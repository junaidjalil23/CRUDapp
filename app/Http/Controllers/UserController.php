<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostTag;
use App\Models\Profile;
use App\Models\User;
use App\Models\Tag;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
         
        return Profile::with('user')->get();
    }
    public function show()
    {
        // $data = Post::with('showpost')->get();
        $data = Tag::find(1);
        dd($data->posts);
        return Post::with('tags')->get();
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
