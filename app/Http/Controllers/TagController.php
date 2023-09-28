<?php

namespace App\Http\Controllers;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{

    public function showtag()
{
    return $this->belongsToMany(Post::class,'post_tag','posts_id','tags_id');
}
//     public function showPosts($tagId)
// {
//     $tag = Tag::find($tagId);
//     $posts = $tag->posts;
//     return view('tags.posts', compact('tag', 'posts'));
// }
}
