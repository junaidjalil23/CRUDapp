@extends('layouts.app')

@section('content')
<div class="container">
    <h2>User of the Comment</h2>
    <p>Comment: {{ $comment->body }}</p>
    <p>User: {{ $user->name }}</p>
</div>
@endsection
