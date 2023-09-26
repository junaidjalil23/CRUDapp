<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function showUser($commentId)
    {
        $comment = Comment::find($commentId);
        $user = $comment->user;
        return view('comments.user', compact('comment', 'user'));
    }
}
