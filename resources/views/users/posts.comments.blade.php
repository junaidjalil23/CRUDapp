@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Comments for "{{ $post->title }}"</h2>
    <ul>
        @foreach ($comments as $comment)
            <li><a href="{{ route('comments.user', $comment->id) }}">{{ $comment->body }}</a></li>
        @endforeach
    </ul>
</div>
@endsection
