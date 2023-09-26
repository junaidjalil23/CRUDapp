<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showComments($postId)
{
    $post = Post::find($postId);
    $comments = $post->comments;
    return view('posts.comments', compact('post', 'comments'));
}
}
