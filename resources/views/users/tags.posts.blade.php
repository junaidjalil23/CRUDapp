@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Posts with Tag: {{ $tag->name }}</h2>
    <ul>
        @foreach ($posts as $post)
            <li>{{ $post->title }}</li>
        @endforeach
    </ul>
</div>
@endsection
