<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show()
    {
        return User::with('posts')->get();
    }
    public function attachTags()
    {
        return Tag::with('posts')->get();

        // // Validate the request here if needed

        // // Get the tag IDs from the request (assuming you have a form field named 'tags[]')
        // $tagIds = $request->input('tags');

        // // Attach the selected tags to the post
        // $post->tags()->attach($tagIds);

        // // Redirect back or return a response as needed
        // return redirect()->back()->with('success', 'Tags attached successfully');
    }
}
