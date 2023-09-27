<?php

namespace App\Http\Controllers;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{

    public function posts()
{
    return $this->belongsToMany(Post::class);
}
//     public function showPosts($tagId)
// {
//     $tag = Tag::find($tagId);
//     $posts = $tag->posts;
//     return view('tags.posts', compact('tag', 'posts'));
// }
}
